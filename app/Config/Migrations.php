<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Migrations extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Enable/Disable Migrations
     * --------------------------------------------------------------------------
     *
     * Migrations are enabled/disabled globally to prevent access via URL.
     *
     * @var boolean
     */
    public $enabled = true;

    /**
     * --------------------------------------------------------------------------
     * Migrations Table
     * --------------------------------------------------------------------------
     *
     * This is the name of the table that will store the current migrations state.
     * When migrations runs it will store in here which migration level the system is at.
     *
     * @var string
     */
    public $table = 'migrations';

    /**
     * --------------------------------------------------------------------------
     * Timestamp Format
     * --------------------------------------------------------------------------
     *
     * This is the format that will be used when creating new migrations
     * name. Timestamps are formatted using `date()` and this is the format
     * that will be used. Changing this will change how new migrations are
     * named.
     *
     * @var string
     */
    public $timestampFormat = 'Y-m-d H:i:s';

    /**
     * --------------------------------------------------------------------------
     * Migration Runner
     * --------------------------------------------------------------------------
     *
     * This configuration array allows you to configure the Migration
     * Runner instance when it is initialized. These settings affect the
     * behavior of the migrations: dependencies, configuration, behavior.
     *
     * @var array<string, mixed>
     */
    public $runner = 'CodeIgniter\Database\MigrationRunner';
}
