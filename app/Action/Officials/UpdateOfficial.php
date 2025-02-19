<?php

namespace App\Action\Officials;

use App\Models\Official;
use Illuminate\Support\Facades\Storage;

class UpdateOfficial
{
    public function execute($id, $request)
    {
        $official = Official::where('official_uuid', $id)->first();
        if (!$official) {
            return false;
        }
        if ($request->hasFile('photo')) {
            // Delete old image if it exists
            if ($official->photo && Storage::disk('public')->exists($official->photo)) {
                Storage::disk('public')->delete($official->photo);
            }
            // Store the new image in 'storage/app/public/officials/'
            $photoPath = $request->file('photo')->store('officials', 'public');
        } else {
            $photoPath = $official->photo; // Keep the old image if no new one is uploaded
        }
        $request['photo'] = $photoPath;
        return $official->update($request->all());
    }
}
