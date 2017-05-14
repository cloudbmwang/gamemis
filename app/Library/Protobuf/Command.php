<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: game.proto

namespace App\Library\Protobuf;

use function foo\func;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>app.library.protobuf.Command</code>
 */
class Command extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *操作类型
     * </pre>
     *
     * <code>.app.library.protobuf.COMMAND_TYPE command_type = 1;</code>
     */
    private $command_type = 0;
    /**
     * <pre>
     *返回码
     * </pre>
     *
     * <code>.app.library.protobuf.ERROR_CODE error_code = 2;</code>
     */
    private $error_code = 0;
    /**
     * <pre>
     *账号
     * </pre>
     *
     * <code>bytes account = 3;</code>
     */
    private $account = '';
    /**
     * <pre>
     *玩家角色ID
     * </pre>
     *
     * <code>int64 player_id = 4;</code>
     */
    private $player_id = 0;
    /**
     * <pre>
     *数量(根据COMMAND_TYPE有不同的意义)
     * </pre>
     *
     * <code>int32 count = 5;</code>
     */
    private $count = 0;

    public function __construct() {
        \GPBMetadata\Game::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *操作类型
     * </pre>
     *
     * <code>.app.library.protobuf.COMMAND_TYPE command_type = 1;</code>
     */
    public function getCommandType()
    {
        return $this->command_type;
    }

    /**
     * <pre>
     *操作类型
     * </pre>
     *
     * <code>.app.library.protobuf.COMMAND_TYPE command_type = 1;</code>
     */
    public function setCommandType($var)
    {
        GPBUtil::checkEnum($var, \App\Library\Protobuf\COMMAND_TYPE::class);
        $this->command_type = $var;
    }

    /**
     * <pre>
     *返回码
     * </pre>
     *
     * <code>.app.library.protobuf.ERROR_CODE error_code = 2;</code>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * <pre>
     *返回码
     * </pre>
     *
     * <code>.app.library.protobuf.ERROR_CODE error_code = 2;</code>
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkEnum($var, \App\Library\Protobuf\ERROR_CODE::class);
        $this->error_code = $var;
    }

    /**
     * <pre>
     *账号
     * </pre>
     *
     * <code>bytes account = 3;</code>
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * <pre>
     *账号
     * </pre>
     *
     * <code>bytes account = 3;</code>
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, False);
        $this->account = $var;
    }

    /**
     * <pre>
     *玩家角色ID
     * </pre>
     *
     * <code>int64 player_id = 4;</code>
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * <pre>
     *玩家角色ID
     * </pre>
     *
     * <code>int64 player_id = 4;</code>
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->player_id = $var;
    }

    /**
     * <pre>
     *数量(根据COMMAND_TYPE有不同的意义)
     * </pre>
     *
     * <code>int32 count = 5;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <pre>
     *数量(根据COMMAND_TYPE有不同的意义)
     * </pre>
     *
     * <code>int32 count = 5;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;
    }

    public function toArray()
    {
        $properties = get_object_vars($this);

        return array_map(function ($property) {
            return $property;
        }, $properties);
    }
}
