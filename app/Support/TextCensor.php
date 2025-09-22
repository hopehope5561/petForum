<?php

namespace App\Support;

class TextCensor
{
    // listedeki kelimeleri maskele (örn: k***e)
    public static function apply(string $text, array $words): string
    {
        if (empty($words)) return $text;

        foreach ($words as $w) {
            $w = trim($w);
            if ($w === '') continue;

            // Türkçe uyumlu kelime sınırları
            $pattern = '/(?<!\pL)(' . preg_quote($w, '/') . ')(?!\pL)/iu';

            $text = preg_replace_callback($pattern, function ($m) {
                $word = $m[1];
                $len  = mb_strlen($word, 'UTF-8');

                if ($len <= 2) return str_repeat('*', $len);

                $first = mb_substr($word, 0, 1, 'UTF-8');
                $last  = mb_substr($word, -1, 1, 'UTF-8');
                return $first . str_repeat('*', $len - 2) . $last;
            }, $text);
        }
        return $text;
    }

    // engellenen kelime var mı?
    public static function hasBlocked(string $text, array $blocked): bool
    {
        foreach ($blocked as $w) {
            $w = trim($w);
            if ($w === '') continue;
            $pattern = '/(?<!\pL)(' . preg_quote($w, '/') . ')(?!\pL)/iu';
            if (preg_match($pattern, $text)) return true;
        }
        return false;
    }
}
