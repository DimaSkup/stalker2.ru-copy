<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // there is a list of news types
    public const IMPORTANT_NEWS = 'important';
    public const VIDEO_NEWS     = 'video';
    public const POPULAR_NEWS   = 'popular';
    public const BEST_NEWS      = 'best';

    // an array which contains news types
    public const TYPES = [
        self::IMPORTANT_NEWS    => 'news_type_important',
        self::VIDEO_NEWS        => 'news_type_video',
        self::POPULAR_NEWS      => 'news_type_popular',
        self::BEST_NEWS         => 'news_type_best',
    ];

    public const CATEGORY_INSIDE = 'inside';
    public const CATEGORY_MODDING = 'modding';
    public const CATEGORY_COMMUNITY = 'community';
    public const CATEGORY_RUMORS = 'rumors';
    public const CATEGORY_FROM_DEVELOPERS = 'from_developers';
    public const CATEGORY_OTHER = 'other';

    public const CATEGORIES = [
        self::CATEGORY_INSIDE => 'news_category_inside',
        self::CATEGORY_MODDING => 'news_category_modding',
        self::CATEGORY_COMMUNITY => 'news_category_community',
        self::CATEGORY_RUMORS => 'news_category_rumors',
        self::CATEGORY_FROM_DEVELOPERS => 'news_category_from_developers',
        self::CATEGORY_OTHER => 'news_category_other'
    ];

    protected $fillable = [
        'title',
        'description',
        'text',
        'slug',
        'picture',
        'category',
        'type',
        'isTimelineItem',
        'isAdvertisement',
        'views',
        'settings',
    ];
}
