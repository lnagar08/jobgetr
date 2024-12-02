<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    @php 
    
        $user_id = auth()->guard('web')->user();
        if(!$user_id) {
            return redirect()->route('login');
        }

        

        if($user_id){
            $user = App\Models\User::where('id', $user_id->id)->first();
            $employmentHistories = @$user->employmentHistories;
            $educations = @$user->educations;
            $internships = @$user->internships;
            $courses = @$user->courses;
            $references = @$user->references;
            $links = @$user->links;
            $customSections = @$user->customSections;
            $skills = @$user->skills;
            $languages = @$user->languages;
            $certificates = @$user->certificates;
        }

        $phoneNumber = preg_replace('/[^0-9]/', '', @$user->phone_number);

        if (strlen($phoneNumber) === 11 && $phoneNumber[0] === '1') {
            $phoneNumber = substr($phoneNumber, 1);
        }
        $formattedPhoneNumber = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phoneNumber);
        @$user->phone_number = $formattedPhoneNumber;

    
        $template = App\Models\UserResumeTemplate::leftjoin('resume_templates', 'user_resume_templates.template_id', '=', 'resume_templates.id')
        ->where('user_resume_templates.user_id', @$user->id)->select('user_resume_templates.*', 'resume_templates.template_path','resume_templates.pdf_file_path', 'resume_templates.template_preview_image')->first();
        $viewData = [
            'user' => @$user,
            'skills' => @$skills,
            'employmentHistories' => @$employmentHistories,
            'educations' => @$educations,
            'courses' => @$courses,
            'customSections' => @$customSections,
            'internships' => @$internships,
            'languages' => @$languages,
            'links' => @$links,
            'references' => @$references,
            'certificates' => @$certificates,
            'template' => @$template
        ];
        $templatePath = str_replace('\\', '/', @$template->pdf_file_path);
    @endphp
    @includeIf($templatePath, $viewData)
    
</body>
</html>