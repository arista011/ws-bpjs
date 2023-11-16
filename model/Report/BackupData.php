<?php
$folders = array(
    '/mnt/CCGDBBackup',
    '/mnt/UVDBBackup',
    '/mnt/EADBBackup',
    '/mnt/MEDIK',
    '/mnt/INACBG',
    '/mnt/SISMADAK',
    '/mnt/HIS'
);

$allFileInfo = array();

foreach ($folders as $folder) {
    if (is_dir($folder)) {
        // Get the current timestamp
        $currentTime = time();

        // Calculate the timestamp for 3 days ago
        $threeDaysAgo = strtotime('-3 days', $currentTime);

        // Open the directory for reading
        if ($handle = opendir($folder)) {
            // Initialize an array to store file information for this folder
            $fileInfo = array();

            // Loop through the files in the directory
            while (false !== ($entry = readdir($handle))) {
                // Exclude "." and ".." directories
                if ($entry != "." && $entry != "..") {
                    $filePath = $folder . '/' . $entry;

                    // Check if it's a file
                    if (is_file($filePath)) {
                        // Get the last modified timestamp of the file
                        $lastModifiedTimestamp = filemtime($filePath);

                        // Check if the file was modified within the last 3 days
                        if ($lastModifiedTimestamp >= $threeDaysAgo) {
                            // Get the file size in bytes
                            $fileSizeBytes = filesize($filePath);

                            // Convert file size to a more human-readable format
                            $fileSize = formatFileSize($fileSizeBytes);

                            // Store the file name and size in the array
                            $fileInfo[] = array(
                                'folder' => str_replace('/mnt/', '', $folder),
                                'filename' => $entry,
                                'size' => $fileSize,
                                'last_modified' => date('Y-m-d H:i:s', $lastModifiedTimestamp)
                            );
                        }
                    }
                }
            }
            closedir($handle);

            // Add the file information for this folder to the combined array
            $allFileInfo = array_merge($allFileInfo, $fileInfo);
        } else {
            echo "Could not open the directory: $folder<br>";
        }
    } else {
        echo "Directory not found: $folder<br>";
    }
}

function formatFileSize($sizeInBytes)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $index = 0;
    while ($sizeInBytes >= 1024 && $index < count($units) - 3) {
        $sizeInBytes /= 1024;
        $index++;
    }
    return number_format($sizeInBytes, 2) . ' ' . $units[$index];
}

// Output the combined file information as JSON
header('Content-Type: application/json');
echo json_encode($allFileInfo);
