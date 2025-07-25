<?php
declare(strict_types=1);

namespace App\Service;

use App\Service\Impl\UploadService;
use Kernel\Annotation\Bind;

#[Bind(class: UploadService::class)]
interface Upload
{
    /**
     * 文件上传
     * @param $upload
     * @param $dir
     * @param $type
     * @param int $size
     * @param string $file_name
     * @return mixed
     */
    public function handle($upload, $dir, $type, int $size = 10000, string $file_name = ''): mixed;
}