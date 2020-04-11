<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// 定义项目 API 的 proto 文件 可以同时描述 gRPC 和 HTTP API
// protobuf 文件参考:
//  - https://developers.google.com/protocol-buffers/
namespace User\Service\V1;

/**
 */
class DemoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Ping(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.service.v1.Demo/Ping',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Service\V1\HelloReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SayHello(\User\Service\V1\HelloReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.service.v1.Demo/SayHello',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\Service\V1\HelloReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SayHelloURL(\User\Service\V1\HelloReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.service.v1.Demo/SayHelloURL',
        $argument,
        ['\User\Service\V1\HelloResp', 'decode'],
        $metadata, $options);
    }

}
