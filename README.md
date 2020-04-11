# kratos-protoc

> 本项目基于 [kratos](https://github.com/go-kratos/kratos) protoc 工具开发。增加自定义输出目录、按语言分录存放生成文件、支持 PHP 文件生成

## Quick start

### Requirments
`Go version>=1.13`

### Install kratos
```
$> GO111MODULE=on && go get -u github.com/go-kratos/kratos/tool/kratos
```

### Generate 

```
# generate all
$> kratos tool protoc api.proto

# generate gRPC
$> kratos tool protoc --grpc api.proto

# generate PHP
$> kratos tool protoc --php api.proto

# generate BM HTTP
$> kratos tool protoc --bm api.proto

# generate ecode
$> kratos tool protoc --ecode api.proto

# generate swagger
$> kratos tool protoc --swagger api.proto
```
