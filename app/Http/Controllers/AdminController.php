<?php

namespace App\Http\Controllers;


use App\Models\Professional_experience;
use App\Models\profile;
use App\Models\User;
use App\Models\Eduction;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
public function view_userprofile()
{
    return view('Admin.Profile');
}     


    public function add_profile(Request $request)
    {
        $profile = new Profile();
    
        // Set the values for the profile attributes from the request
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->birthday = $request->input('birthday');
        $profile->website = $request->input('website');
        $profile->phone = $request->input('phone');
        $profile->city = $request->input('city');
        $profile->age = $request->input('age');
        $profile->degree = $request->input('degree');
        $profile->freelance = $request->input('freelance');
        $profile->description = $request->input('description');
        
        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $profile_photo = $request->file('profile_photo');
            $imageName = time() . '.' . $profile_photo->getClientOriginalExtension();
            $path = 'storeimage/' . $imageName;
            Storage::disk('public')->put($path, file_get_contents($profile_photo));
            $profile->profile_photo = $path;
        }
    
        $profile->save();
    
        return back()->with('success', 'Profile has been updated successfully!');
    }

public function view_deleteprofile()
{
    $datas = profile::all();
    return view('Admin.deleteprofile',compact('datas'));
}     

public function delete_profile($id)
{
    $data = profile::find($id);
    
    if (!$data) {
        // Handle the case where the profile is not found
        return redirect()->back()->with('error', 'Profile not found.');
    }

    $data->delete();
    
    return redirect()->back()->with('success', 'Profile deleted successfully.');
}

public function view_education()
{
return view('admin.education');
} 

public function view_Professional()
{
return view('admin.Professional');
} 

public function add_professional(Request $request)
{
    // Create a new instance of the ProfessionalExperience model
    $professional = new Professional_experience();

    // Set the values for the model's attributes from the request
    $professional->position = $request->input('position');
    $professional->duration = $request->input('duration');
    $professional->company = $request->input('company');
    $professional->responsibilities = $request->input('responsibilities');

    // Save the model instance to the database
    $professional->save();

    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Professional experience added successfully.');
}

public function add_education(Request $request)
{
    $education = new Eduction();

    // Set the values for the education attributes from the request
    $education->degree = $request->input('degree');
    $education->duration = $request->input('duration');
    $education->school = $request->input('school');
    $education->description = $request->input('description');

    // Save the education record to the database
    $education->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Education details added successfully.');
}

public function view_deleteeducation()
{
    $educationData = Eduction::all();
    return view('Admin.deleteeducation',compact('educationData'));
}     

public function delete_education($id)
{
    $eduData = Eduction::find($id);
    
    if (!$eduData) {
        // Handle the case where the profile is not found
        return redirect()->back()->with('error', 'educaation not found.');
    }

    $eduData->delete();
    
    return redirect()->back()->with('success', 'education deleted successfully.');
}

public function view_professional_delete()
{
    $professionalData = Professional_experience::all();
    return view('Admin.delete_professional',compact('professionalData'));
}     
public function delete_professional($id)
{
    $profData = Professional_experience::find($id);
    
    if (!$profData) {
        // Handle the case where the profile is not found
        return redirect()->back()->with('error', 'profession not found.');
    }

    $profData->delete();
    
    return redirect()->back()->with('success', 'professional deleted successfully.');
}


public function update_profile($id)
{
    // Fetch user data by ID (you'll need to add the logic to retrieve the user)
   $datas = profile::find($id);

    return view('admin.updateUser', compact('datas'));
}

// public function updateUser(Request $request, $id)
// {
//     // Validate and update the user data (you'll need to add the logic for updating)

//     // Redirect back to the form with a success message
//    // return redirect()->route('admin.editUserForm', ['id' => $id])->with('success', 'User information updated successfully');
// }

public function update_profile_conform(Request $request, $id)
{
    $profile = profile::find($id);
    $profile->name = $request->input('name');
    $profile->email = $request->input('email');
    $profile->birthday = $request->input('birthday');
    $profile->website = $request->input('website');
    $profile->phone = $request->input('phone');
    $profile->city = $request->input('city');
    $profile->age = $request->input('age');
    $profile->degree = $request->input('degree');
    $profile->freelance = $request->input('freelance');
    $profile->description = $request->input('description');

    if ($request->hasFile('profile_photo')) {
        $profile_photo = $request->file('profile_photo');
        $imageName = time() . '.' . $profile_photo->getClientOriginalExtension();
        $path = 'storeimage/' . $imageName;

        // Save the image to the "public" disk
        Storage::disk('public')->put($path, file_get_contents($profile_photo));

        // Update the user's profile_photo attribute with the new path
        $profile->profile_photo = $path;
    }

    // Save the changes to the database
    $profile->save();

    // Add a success message to the session
    $request->session()->flash('success', 'Profile updated successfully');

    // Redirect back to the profile page
    return redirect()->back();
}

public function update_profession($id)
{
   
   $professionalData = Professional_experience::find($id);

    return view('admin.updateProfession', compact('professionalData'));
}

public function update_profession_conform(request $request, $id)
{
    $professionalData = Professional_experience::find($id);

    $professionalData->position = $request->input('position');
    $professionalData->duration = $request->input('duration');
    $professionalData->company = $request->input('company');
    $professionalData->responsibilities = $request->input('responsibilities');

    // Save the model instance to the database
    $professionalData->save();

    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Professional experience update successfully.');    
}

public function update_eduction($id)
{
    $educationData = Eduction::find($id);
    return view('Admin.update_eduction',compact('educationData'));
}     
public function update_education_conform(request $request,$id)
{
    $educationData = Eduction::find($id);
    $educationData->degree = $request->input('degree');
    $educationData->duration = $request->input('duration');
    $educationData->school = $request->input('school');
    $educationData->description = $request->input('description');

    // Save the education record to the database
    $educationData->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Education details update successfully.');


}

}
