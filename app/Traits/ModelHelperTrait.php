<?php
namespace App\Traits;

use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Builder;

trait ModelHelperTrait
{
    use FormAccessible;

    public function getCreatedAtAttribute($value)
    {
        setlocale(LC_TIME, 'french');
        //setlocale(LC_TIME, 'fr_FR');
        //return utf8_encode(Carbon::parse($value)->formatLocalized('%A %d %B %Y'));
        return utf8_encode(Carbon::parse($value)->formatLocalized('%d/%m/%Y'));
    }

    public function formCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getStartDateAttribute($value)
    {
        //setlocale(LC_TIME, 'french');
        setlocale(LC_TIME, 'fr_FR');
        //return utf8_encode(Carbon::parse($value)->formatLocalized('%A %d %B %Y'));
        return utf8_encode(Carbon::parse($value)->formatLocalized('%m/%d/%Y'));
    }

    public function formStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getCroppedImage($post)
    {
        $image = $post->image;
        if (is_null($image))
        {
            return null;
        }
        else
        {
            $path_parts = pathinfo($post->image);
            $dirname = $path_parts['dirname'];
            //$basename = $path_parts['basename'];
            $extension = $path_parts['extension'];
            $filename = $path_parts['filename'];

            return $dirname.'/'.$filename.'-cropped.'.$extension;
        }
    }

    public function getCropped($post, $param)
    {
        // Security check
        // Only alphanum characters are acceptable

        if(preg_match('/[^a-z_\-0-9]/i', $param))
        {
            // not valid string
            return null;
        }
        else
        {
            $image = $post->image;
            if (is_null($image))
            {
                return null;
            }
            else
            {
                $path_parts = pathinfo($post->image);
                $dirname = $path_parts['dirname'];
                //$basename = $path_parts['basename'];
                $extension = $path_parts['extension'];
                $filename = $path_parts['filename'];

                return $dirname.'/'.$filename.'-'.$param.'.'.$extension;
            }
        }
    }

    public function scopeFeatured(Builder $query)
    {
        return $query->where('featured', '=', 1);
    }
}
