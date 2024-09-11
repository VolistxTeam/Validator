<?php

return [
    'error' => [
        'e400' => '하나 이상의 잘못된 매개 변수가 지정되었습니다.',
        'e401' => '이 리소스에 접근할 수 있는 권한이 부족합니다.',
        'e403' => '이 리소스에 접근할 수 있는 권한이 없습니다.',
        'e404' => '요청한 리소스를 찾을 수 없습니다.',
        'e409' => '리소스의 현재 상태와 충돌하여 요청을 완료할 수 없습니다.',
        'e429' => '이 리소스에 대한 제한 속도를 초과했습니다.',
        'e500' => '예기치 못한 오류가 발생했습니다.',
    ],
    'log_id' => [
        'required' => '로그 ID는 필수 항목입니다.',
        'uuid' => '로그 ID는 올바른 UUID이어야 합니다.',
        'exists' => '지정된 ID의 로그를 찾을 수 없습니다.',
    ],
    'page' => [
        'integer' => '페이지는 정수로 입력해야 합니다.',
    ],
    'limit' => [
        'integer' => '제한은 정수로 입력해야 합니다.',
    ],
    'invalid_search_column' => '지정된 매개 변수를 사용하여 검색할 수 없습니다.',
    'user_id' => [
        'required' => '사용자 ID는 필수 항목입니다.',
        'exist' => '사용자 ID 필드가 있어야 합니다.',
        'uuid' => '사용자 ID는 유효한 UUID여야 합니다.',
    ],
    'duration' => [
        'required' => '기간은 필수 항목입니다.',
    ],
    'expires_at' => [
        'date' => '만료 날짜는 유효한 날짜를 입력해야 합니다.',
        'present' => '만료 날짜 필드가 있어야 합니다.',
    ],
    'rate_limit_mode' => [
        'required' => '속도 제한 모드는 필수 항목입니다.',
        'enum' => '속도 제한 모드는 올바른 타입이어야 합니다.',
    ],
    'permissions' => [
        'array' => '사용 권한은 배열이어야 합니다.',
        '*.string' => '사용 권한은 문자열이어야 합니다.',
    ],
    'ip_rule' => [
        'required' => 'IP 규칙은 필수 항목입니다.',
        'enum' => 'IP 규칙은 유효한 유형이어야 합니다.',
    ],
    'ip_range' => [
        'required_if' => 'IP 규칙이 1 혹은 2인 경우 IP 범위가 필요합니다.',
        'array' => 'IP 범위는 배열이어야 합니다.',
        '*.ip' => 'IP 범위는 유효한 IP 주소이어야 합니다.',
    ],
    'country_rule' => [
        'required' => '국가 규칙은 필수 항목입니다.',
        'enum' => '국가 규칙은 유효한 유형이어야 합니다.',
    ],
    'country_range' => [
        'required_if' => '국가 규칙이 1 혹은 2인 경우 국가 범위는 필수 항목입니다.',
        'array' => '국가는 범위는 배열이어야 합니다.',
        '*.required_if' => '국가 범위 항목은 유효한 국가의 단축 명칭이어야 합니다.',
    ],
    'disable_logging' => [
        'boolean' => '로깅 비활성화는 boolean 이어야 합니다.',
    ],
    'hmac_token' => [
        'max' => 'HMAC 토큰은 255자 미만이어야 합니다.',
    ],
    'token_id' => [
        'required' => '토큰 ID는 필수 항목입니다.',
        'uuid' => '토큰 ID는 유효한 UUID이어야 합니다.',
        'exists' => '지정된 ID의 토큰을 찾을 수 없습니다.',
    ],
    'plan_id' => [
        'required' => '플랜 ID는 필수 항목입니다.',
        'uuid' => '플랜 ID는 유효한 UUID이어야 합니다.',
        'exists' => '지정된 ID의 플랜을 찾을 수 없습니다.',
    ],
    'activated_at' => [
        'date' => '활성화된 날짜는 유효한 날짜이어야 합니다.',
        'required' => '활성화된 날짜는 필수 항목입니다.',
    ],
    'cancels_at' => [
        'date' => '취소 날짜는 유효한 날짜이어야 합니다.',
    ],
    'cancelled_at' => [
        'date' => '취소된 날짜는 유효한 날짜이어야 합니다.',
    ],
    'subscription_id' => [
        'required' => '구독 ID는 필수 항목입니다.',
        'uuid' => '구독 ID는 유효한 UUID이어야 합니다.',
        'exists' => '지정된 ID의 구독을 찾을 수 없습니다.',
    ],
    'name' => [
        'required' => '이름은 필수 항목입니다.',
        'string' => '이름은 문자열이어야 합니다.',
        'max' => '이름은 255자를 초과할 수 없습니다.',
    ],
    'tag' => [
        'required' => '태그는 필수 항목입니다.',
        'string' => '태그는 문자열이어야 합니다.',
        'unique' => '태그가 이미 사용되었습니다.',
    ],
    'description' => [
        'required' => '설명은 필수 항목입니다.',
        'string' => '설명은 문자열이어야 합니다.',
    ],
    'data' => [
        'required' => '데이터는 필수 항목입니다.',
        'array' => '데이터는 배열이어야 합니다.',
    ],
    'price' => [
        'required' => '가격이 필수 항목입니다.',
        'numeric' => '가격은 숫자이어야 합니다.',
    ],
    'tier' => [
        'required' => '등급은 필수 항목입니다.',
        'integer' => '등급은 정수이어야 합니다.',
        'unique' => '등급이 이미 적용되었습니다.',
    ],
    'custom' => [
        'required' => '커스텀은 필수 항목입니다.',
        'boolean' => '맞춤 설정은 boolean이어야 합니다.',
    ],
    'is_active' => [
        'boolean' => '활성화 상태는 boolean이어야 합니다.',
    ],
    'service' => [
        'not_allowed_to_access_from_your_ip' => '이 서비스는 귀하의 IP 주소에서 접근할 수 없습니다.',
        'not_allowed_to_access_from_your_country' => '이 서비스는 귀하의 국가에서 접근할 수 없습니다.',
    ],
    'token' => [
        'expired' => '귀하의 토큰이 만료되었습니다.',
    ],
    'request_count' => [
        'can_not_retrieve' => '요청 개수를 검색할 수 없습니다.',
        'exceeded_limit' => '이 플랜에 대한 요청 한도에 도달했습니다.',
    ],
    'subscription' => [
        'expired' => '귀하의 구독이 만료되었습니다.',
        'can_not_uncancel' => '귀하의 구독 취소를 해제할 수 없습니다.',
        'can_not_cancel_subscription' => '구독을 취소할 수 없습니다.',
    ],
    'user' => [
        'inactive_user' => '사용자가 비활성 상태입니다.',
    ],
];
