<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use ZipArchive;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userFiles()
    {
        $userFiles = UserFile::with('user')->get();

        return view('admin.user_files', compact('userFiles'));
    }
    public function downloadAll()
    {
        $userFiles = UserFile::all();
        $csvData = "Nombre, CV PDF, Otros archivos\n";

        foreach ($userFiles as $userFile) {
            $csvData .= "{$userFile->user->name}, " . asset('storage/' . $userFile->cv_pdf) . ", ...\n";
            // Agrega más enlaces para los otros archivos
        }

        $csvFileName = 'user_files.csv';

        return Response::make($csvData, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ]);
    }
    public function showUserFiles($id)
    {
        $userFiles = UserFile::where('user_id', $id)->get();
        return view('admin.show', compact('userFiles'));

    }


}