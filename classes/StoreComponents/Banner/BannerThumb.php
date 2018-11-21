<?php
/**
 * Created by PhpStorm.
 * User: royalwang
 * Date: 2018/11/21
 * Time: 11:12
 */

namespace Ecjia\App\Merchant\StoreComponents\Banner;

use Ecjia\App\Merchant\Models\StoreFranchiseeModel;
use RC_Upload;
use RC_Image;
use RC_Storage;
use RC_File;

class BannerThumb
{

    protected $suffix = '_thumb';

    protected $store_id;

    protected $model;

    /**
     * 缩略图宽度
     * @var int
     */
    protected $thumb_width = 450;

    /**
     * 缩略图高度
     * @var int
     */
    protected $thumb_height = 150;

    public function __construct($store_id)
    {
        $this->store_id = $store_id;
        $this->model = (new StoreFranchiseeModel)->find($this->store_id);
    }


    public function getStoreModel()
    {
        return $this->model;
    }

    /**
     * 获取店铺Banner的图片路径
     */
    public function getStoreBannerPath()
    {
        return RC_Upload::upload_path($this->model->shop_banner_pic);
    }

    /**
     * 获取店铺Banner的图片URL
     */
    public function getStoreBannerUrl()
    {
        return RC_Upload::upload_url($this->model->shop_banner_pic);
    }

    /**
     * 获取店铺Banner的缩略图的图片路径
     */
    public function getStoreBannerThumbPath()
    {
        return RC_Upload::upload_path($this->transformBannerThumbFileName());
    }

    /**
     * 获取店铺Banner的缩略图的图片URL
     */
    public function getStoreBannerThumbUrl()
    {
        return RC_Upload::upload_url($this->transformBannerThumbFileName());
    }

    /**
     * 转换缩略图文件名
     *
     * @return string
     */
    protected function transformBannerThumbFileName()
    {
        return str_replace('.', $this->suffix . '.', $this->model->shop_banner_pic);
    }

    /**
     * 创建缩略图文件
     */
    public function createBannerThumbFile()
    {
        if (RC_Storage::disk()->exists($this->getStoreBannerPath())) {
            $img = RC_Image::make($this->getStoreBannerPath());
            $img->resize($this->thumb_width, $this->thumb_height, function ($constraint) {
                $constraint->aspectRatio();
            });

            $tempPath = $this->getTempPath();
            $img->save($tempPath);

            //上传临时文件到指定目录
            RC_Storage::disk()->move($tempPath, $this->getStoreBannerThumbPath(), true, FS_CHMOD_FILE);

            //删除临时文件
            RC_File::delete($tempPath);
        }

        return $this;
    }


    /**
     * 生成临时文件路径
     * @return string
     */
    protected function getTempPath()
    {
        $tempDir = storage_path() . '/temp/merchant_banners/';
        if (!RC_File::exists($tempDir)) {
            RC_File::makeDirectory($tempDir, 0777, true);
        }

        $tmpfname = tempnam($tempDir, 'thumb_');
        return $tmpfname;
    }

}