<?php
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $extensions = array("pdf", "doc", "docx", "txt");

    for ($i=0; $i < $totalFiles; $i++) { 
        $fileName = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        @$file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

        $errors = array();

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.<br>";
        }
    
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.<br>";
        }
    
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $fileName);
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo implode("", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>