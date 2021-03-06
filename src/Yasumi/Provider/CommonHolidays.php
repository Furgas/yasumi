<?php
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Provider;

use DateTime;
use DateTimeZone;
use Yasumi\Holiday;

/**
 * Trait CommonHolidays.
 *
 * Trait containing commonly known holidays that are celebrated in all / many countries in the world.
 */
trait CommonHolidays
{
    /**
     * New Year's Day.
     *
     * New Year's Day is observed on January 1, the first day of the year on the modern Gregorian calendar as well as
     * the Julian calendar. As a date in the Gregorian calendar of Christendom, New Year's Day liturgically marked the
     * Feast of the Circumcision of Christ, and is still observed as such in the Anglican Church and Lutheran Church.
     * In present day, with most countries now using the Gregorian calendar as their de facto calendar, New Year's Day
     * is probably the most celebrated public holiday, often observed with fireworks at the stroke of midnight as the
     * new year starts in each time zone.
     *
     * @link http://en.wikipedia.org/wiki/New_Year%27s_Day Source: Wikipedia.
     *
     * @param int    $year     the year for which New Year's Day need to be created
     * @param string $timezone the timezone in which New Year's Day is celebrated
     * @param string $locale   the locale for which New Year's Day need to be displayed in.
     *
     * @return \Yasumi\Holiday
     */
    public function newYearsDay($year, $timezone, $locale)
    {
        return new Holiday('newYearsDay', [], new DateTime("$year-1-1", new DateTimeZone($timezone)), $locale);
    }

    /**
     * Labour Day.
     *
     * Labour Day (Labor Day in the United States) is an annual holiday to celebrate the achievements of workers.
     * Labour Day has its origins in the labour union movement, specifically the eight-hour day movement, which
     * advocated eight hours for work, eight hours for recreation, and eight hours for rest. For many countries, Labour
     * Day is synonymous with, or linked with, International Workers' Day, which occurs on 1 May.
     *
     * @link http://en.wikipedia.org/wiki/Labour_Day Source: Wikipedia.
     *
     * @param int    $year     the year for which Labour Day need to be created
     * @param string $timezone the timezone in which Labour Day is celebrated
     * @param string $locale   the locale for which Labour Day need to be displayed in.
     *
     * @return \Yasumi\Holiday
     */
    public function labourDay($year, $timezone, $locale)
    {
        return new Holiday('labourDay', [], new DateTime("$year-5-1", new DateTimeZone($timezone)), $locale);
    }

    /**
     * Valentine's Day
     *
     * Valentine's Day, also known as Saint Valentine's Day or the Feast of Saint Valentine, is a celebration observed
     * on February 14 each year. It is celebrated in many countries around the world, although it is not a public
     * holiday in most of them. In 18th-century England, it evolved into an occasion in which lovers expressed their
     * love for each other by presenting flowers, offering confectionery, and sending greeting cards (known as
     * "valentines").
     *
     * @link http://en.wikipedia.org/wiki/Valentine%27s_Day Source: Wikipedia.
     *
     * @param int    $year     the year for which Valentine's Day need to be created
     * @param string $timezone the timezone in which Valentine's Day is celebrated
     * @param string $locale   the locale for which Valentine's Day need to be displayed in.
     *
     * @return \Yasumi\Holiday
     */
    public function valentinesDay($year, $timezone, $locale)
    {
        return new Holiday('valentinesDay', [], new DateTime("$year-2-14", new DateTimeZone($timezone)), $locale);
    }
}