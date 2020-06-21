<?php
namespace AnimeLorem;

class RandomFile
{
    /**
     * Get all files from directory.
     * @param $dir
     * @return array
     */
    private function getFilesFromDirectory($dir): array
    {
        $result = [];
        $scannedDirectory = scandir($dir);

        foreach ($scannedDirectory as $key => $value) {
            if (!in_array($value, ['.', '..'])) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $result[$value] = $this->getFilesFromDirectory($dir . DIRECTORY_SEPARATOR . $value);
                } else {
                    $result[] = $value;
                }
            }
        }

        return $result;
    }

    /**
     * Get one single file from directory.
     * @param $dir
     * @return string
     */
    protected function getRandomFileFromDirectory($dir): string
    {
        $images = [];
        $files = $this->getFilesFromDirectory($dir);

        foreach ($files as $directory => $array) {
            if(!is_array($array)) {
                continue;
            }

            foreach ($array as $image) {
                $images[] = $dir . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $image;
            }
        }

        $randomImageKey = array_rand($images);

        return $images[$randomImageKey];
    }
}