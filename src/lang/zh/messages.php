<?php

return [
    'error' => [
        'e400' => '指定了一个或多个无效参数。',
        'e401' => '您没有足够的权限访问此资源。',
        'e403' => '您没有访问此资源的权限。',
        'e404' => '找不到请求的资源。',
        'e409' => '由于与资源的当前状态冲突，请求无法完成。',
        'e429' => '您已超过此资源的速率限制。',
        'e500' => '发生意外错误。',
    ],
    'log_id' => [
        'required' => '日志ID是必需的。',
        'uuid' => '日志ID必须是有效的UUID。',
        'exists' => '找不到具有给定ID的日志。',
    ],
    'page' => [
        'integer' => '页面必须是整数。',
    ],
    'limit' => [
        'integer' => '限制必须是整数。',
    ],
    'invalid_search_column' => '无法使用给定参数进行搜索。',
    'user_id' => [
        'required' => '需要填写用户ID。',
        'exist' => '用户ID字段必须存在。',
        'uuid' => '用户ID必须是有效的UUID。',
    ],
    'duration' => [
        'required' => '需要填写持续时间。',
    ],
    'expires_at' => [
        'date' => '到期日期必须是有效日期。',
        'present' => '到期日期字段必须存在。',
    ],
    'rate_limit_mode' => [
        'required' => '需要速率限制模式。',
        'enum' => '速率限制模式必须是有效类型。',
    ],
    'permissions' => [
        'array' => '权限必须是数组。',
        '*.string' => '权限必须是字符串。',
    ],
    'ip_rule' => [
        'required' => '需要填写IP规则。',
        'enum' => 'IP规则必须是有效类型。',
    ],
    'ip_range' => [
        'required_if' => '当IP规则为1或2时，需要IP范围。',
        'array' => 'IP范围必须是数组。',
        '*.ip' => 'IP范围必须是有效的IP地址。',
    ],
    'country_rule' => [
        'required' => '国家/地区规则是必需的。',
        'enum' => '国家/地区规则必须是有效类型。',
    ],
    'country_range' => [
        'required_if' => '当国家/地区规则为1或2时，需要国家/地区范围。',
        'array' => '国家/地区范围必须是数组。',
        '*.required_if' => '国家/地区项必须是有效的国家/地区短名称。',
    ],
    'disable_logging' => [
        'boolean' => '禁用日志记录必须是布尔值。',
    ],
    'hmac_token' => [
        'max' => 'HMAC令牌必须少于255个字符。',
    ],
    'token_id' => [
        'required' => '需要填写令牌ID。',
        'uuid' => '令牌ID必须是有效的UUID。',
        'exists' => '找不到给定ID的令牌。',
    ],
    'plan_id' => [
        'required' => '计划ID是必填的。',
        'uuid' => '计划ID必须是有效的UUID。',
        'exists' => '找不到给定ID的计划。',
    ],
    'activated_at' => [
        'date' => '激活日期必须是有效日期。',
        'required' => '激活日期是必填的。',
    ],
    'cancels_at' => [
        'date' => '取消日期必须是有效日期。',
    ],
    'cancelled_at' => [
        'date' => '取消日期必须是有效日期。',
    ],
    'subscription_id' => [
        'required' => '订阅ID是必需的。',
        'uuid' => '订阅ID必须是有效的UUID。',
        'exists' => '找不到给定ID的订阅。',
    ],
    'name' => [
        'required' => '名称是必填项。',
        'string' => '名称必须是字符串。',
        'max' => '名称不得超过255个字符。',
    ],
    'tag' => [
        'required' => '标签是必填项。',
        'string' => '标签必须是字符串。',
        'unique' => '标签已被占用。',
    ],
    'description' => [
        'required' => '描述是必填项。',
        'string' => '描述必须是字符串。',
    ],
    'data' => [
        'required' => '数据是必填的。',
        'array' => '数据必须是数组。',
    ],
    'price' => [
        'required' => '价格是必填的。',
        'numeric' => '价格必须是数字。',
    ],
    'tier' => [
        'required' => '等级是必填的。',
        'integer' => '等级必须是整数。',
        'unique' => '该等级已被占用。',
    ],
    'custom' => [
        'required' => '自定义是必填的。',
        'boolean' => '自定义必须是布尔值。',
    ],
    'is_active' => [
        'boolean' => '激活状态必须是布尔值。',
    ],
    'service' => [
        'not_allowed_to_access_from_your_ip' => '不允许从您的IP地址访问此服务。',
        'not_allowed_to_access_from_your_country' => '您的国家/地区不允许访问此服务。',
    ],
    'token' => [
        'expired' => '您的令牌已过期。',
    ],
    'request_count' => [
        'can_not_retrieve' => '无法检索请求计数。',
        'exceeded_limit' => '您已达到此计划的请求限制。',
    ],
    'subscription' => [
        'expired' => '您的订阅已过期。',
        'can_not_uncancel' => '无法撤回取消订阅。',
        'can_not_cancel_subscription' => '订阅无法取消。',
    ],
    'user' => [
        'inactive_user' => '用户不活跃。',
    ],
];
