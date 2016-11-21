<?php
namespace DebugAnalyzer\Application\Factories\EventsFactory;

use DebugAnalyzer\Application\Events\Timestamp;

/**
 * Class TimestampFactory
 * @package DebugAnalyzer\Application\Factories\EventsFactory
 */
class TimestampFactory
{
    const TIMEZONE_TYPE = 'timezone_type';
    const DATE = 'date';
    const TIMEZONE = 'timezone';

    /**
     * @param array $timestampOptions
     * @return Timestamp
     */
    public static function buildTimestamp(array $timestampOptions):Timestamp
    {
        return new Timestamp(
            $timestampOptions[self::DATE],
            $timestampOptions[self::TIMEZONE_TYPE],
            $timestampOptions[self::TIMEZONE]
        );
    }
}