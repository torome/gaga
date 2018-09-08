<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/net.proto

namespace Zaly\Proto\Core;

/**
 * there are lots of mime.types here:
 * http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
 *
 * Protobuf type <code>core.FileType</code>
 */
class FileType
{
    /**
     * Generated from protobuf enum <code>FileInvalid = 0;</code>
     */
    const FileInvalid = 0;
    /**
     * the server should find the exactly extension, ex: http://php.net/manual/en/function.mime-content-type.php
     *
     * Generated from protobuf enum <code>FileImage = 1;</code>
     */
    const FileImage = 1;
    /**
     * the server should find the exactly extension, ex: http://php.net/manual/en/function.mime-content-type.php
     *
     * Generated from protobuf enum <code>FileAudio = 2;</code>
     */
    const FileAudio = 2;
}
