package main

import (
	"errors"
	"os/exec"
	"strings"
)

var gppp string

const (
	_phpProtoc     = `protoc --proto_path=%s --proto_path=%s --proto_path=%s --php_out=:`
	_phpGrpcProtoc = "protoc --proto_path=%s --proto_path=%s --proto_path=%s --plugin=protoc-gen-grpc="
)

func init() {
	//get grpc_php_plugin path
	cmd := exec.Command("which", "grpc_php_plugin")
	outPut, err := cmd.Output()
	if err != nil {
		panic(err)
	}

	gppp = strings.Replace(string(outPut), "\n", "", -1)

}

func installPHPGen() error {
	if _, err := exec.LookPath("grpc_php_plugin"); err != nil {
		return errors.New("您还没安装 grpc_php_plugin，请进行手动安装：https://github.com/grpc/grpc/tree/master/src/php")
	}
	return nil
}

func genPHP(files []string) error {
	path := outPath + "/php"
	err := checkPath(path)
	if err != nil {
		return err
	}
	err = generate(_phpProtoc+path, files)
	if err != nil {
		return err
	}

	return generate(_phpGrpcProtoc+gppp+" --grpc_out=:"+path, files)
}
