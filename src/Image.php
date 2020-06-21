<?php
namespace AnimeLorem;

use Intervention\Image\ImageManager as InterventionImage;

class Image extends RandomFile
{
    /**
     * @var string
     */
    private $directory;

    /**
     * Image constructor.
     * @param string $directory
     */
    public function __construct(string $directory)
    {
        $this->directory = $directory;
    }

    /**
     * Image response.
     * @param string $format
     * @param bool $greyscale
     * @param int $quality
     * @return mixed
     */
    public function response(string $format, $greyscale = false, int $quality = 60)
    {
        $manager = new InterventionImage();

        $filePath = $this->getRandomFileFromDirectory($this->directory);

        $image = $manager->make($filePath)->fit(200, 200);

        if($greyscale) {
            $image->greyscale();
        }

        return $image->response($format, $quality);
    }
}