<?php

$jsonld = [
    "@context" => "http://schema.org",
    "@type" => "Person",
    "name" => "CQD",
    "jobTitle" => [
        "後端工程師",
        "小女孩殺手",
        "鏟屎官",
    ],
    "knowsAbout" => [
        "PHP", "HTML", "Internet", "HTTP",
    ],
    "description" => "CQD 是一種奇妙的生物。常出沒在網路上。最著名事蹟是在三十秒內接收了三萬人分的愛而變身成為巨大機器人。

CQD 熱愛巨大宇宙戰艦，卻打著反戰派的旗幟，整天追著小貓咪、小女孩、跟打扮成小貓咪的小女孩跑。因此一般認為 CQD 是一種自我矛盾的變態生物。

關於 CQD 的外型，曾有這樣的描述：身長四十丈，眉間九尺，眼如銅鑼，口吐白光，腳踏火雲，行如雷鳴。",
    "email" => "mailto:cqd@hiigara.net",
    "url" => "https://cqd.tw",
    "sameAs" => [
        "https://github.com/CQD",
        "https://plurk.com/CQD",
        "https://medium.com/@CQD",
    ],
];

echo json_encode($jsonld),"\n";
