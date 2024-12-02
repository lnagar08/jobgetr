<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use App\Models\SalaryCalculatorData;
use Illuminate\Support\Facades\Validator;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class SalaryController extends Controller
{
   
    public function validateCaptcha($request)
    {
        
        $recaptcha_response = $request->input('g-recaptcha-response');
        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => env("GOOGLE_RECAPTCHA_SECRET"),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);
        return $result;
    }

    public function getSalaryData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'job_title' => 'required',
            'location' => 'required',
        ]);
        
        if(isset($request->submit_btn)){
            $validator = Validator::make($request->all(), [
                'g-recaptcha-response' => 'required',
            ]);
            $captcha_validation = $this->validateCaptcha($request);
            
            if ($captcha_validation->success !== true) {
                return redirect()->back()->with('error', 'reCAPTCHA verification failed.'); 
            }
        }
        if(isset($request->salary_btn)){
            $validator = Validator::make($request->all(), [
                'g-recaptcha-response' => 'required',
            ]);
            $captcha_validation = $this->validateCaptcha($request);
            
            if ($captcha_validation->success !== true) {
                return redirect()->back()->with('error', 'reCAPTCHA verification failed.'); 
            }
        }
        
        $page_title = "How much does a " . $request->job_title . "  make in " . $request->location . "? - Jobgetr";
        $salary_calculator_data = SalaryCalculatorData::where('job_title', $request->job_title)->where('location', $request->location)->first();
        $leads = Lead::where('email', $request->email)->first();
        if(!$leads){
            Lead::create([
                'email' => $request->email,
                'job_title' => $request->job_title,
                'location' => $request->location,
            ]);
        }
        
        
        if(!$salary_calculator_data){
            $client = new Client();
            $url = 'https://job-salary-data.p.rapidapi.com/job-salary';
            $params = [
                'query' => [
                    'job_title' => $request->job_title,
                    'location' => $request->location,
                    'radius' => 5000
                ],
                'headers' => [
                    'X-RapidAPI-Key' => env('X_RAPIDAPI_KEY'),
                    'X-RapidAPI-Host' => env('X_RAPIDAPI_HOST'),
                    'Accept' => 'application/json'
                ]
            ];
            $response = $client->request('GET', $url, $params);
            $data_obj = json_decode($response->getBody(), true);
            $all_data = $data_obj['data'];
            $data = $all_data[0];
            SalaryCalculatorData::create([
                'job_title' =>  $request->job_title,
                'location' => $request->location,
                'publisher_name' => $data['publisher_name'],
                'publisher_link' => $data['publisher_link'],
                'min_salary' => $data['min_salary'],
                'median_salary' => $data['median_salary'],
                'max_salary' => $data['max_salary'],
                'salary_period' => $data['salary_period'],
                'salary_currency' => $data['salary_currency'],
            ]);
             
            return view('salaries', compact('data', 'page_title'));
        }else{
            $data = $salary_calculator_data;
            return view('salaries', compact('data', 'page_title' ));
        }
    }
    public function getSalaryData2(){
        return view('salaries2test');
    }

}
