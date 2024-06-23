<?php
// URL API JobStreet
$url_Question = "https://www.jobstreet.co.id/graphql";
$url_Search = 'https://www.jobstreet.co.id/api/chalice-search/v4/search?siteKey=ID-Main&sourcesystem=houston&userqueryid=65826e91e71a10eddb7cfb090664a5c1-9826636&userid=5e5c8d5c-f0e4-4086-962f-b980277e26ae&usersessionid=5e5c8d5c-f0e4-4086-962f-b980277e26ae&eventCaptureSessionId=5e5c8d5c-f0e4-4086-962f-b980277e26ae&page=1&seekSelectAllPages=true&keywords=IT+Support&classification=6281&subclassification=6288,6289,6291,6284,6293,6303&sortmode=ListedDate&pageSize=30&include=seodata&locale=id-ID&seekerId=575724648&solId=ed42b106-be5a-4cb0-ac56-8bed8c4c4afa';


// Inisialisasi curl
function getQuestion($url,$data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_ENCODING, "gzip");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: www.jobstreet.co.id',
    'sec-ch-ua: "Google Chrome";v="125", "Chromium";v="125", "Not.A/Brand";v="24"',
    'seek-request-country: ID',
    'authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IjVZSDBuSkpwRzYyTDFBZ2tEU3hfeiJ9.eyJodHRwOi8vc2Vlay9jbGFpbXMvY291bnRyeSI6IklEIiwiaHR0cDovL3NlZWsvY2xhaW1zL2JyYW5kIjoiam9ic3RyZWV0IiwiaHR0cDovL3NlZWsvY2xhaW1zL2V4cGVyaWVuY2UiOiJjYW5kaWRhdGUiLCJodHRwOi8vc2Vlay9jbGFpbXMvdXNlcl9pZCI6IjU3NTcyNDY0OCIsImlzcyI6Imh0dHBzOi8vbG9naW4uc2Vlay5jb20vIiwic3ViIjoiYXV0aDB8NjY2ODJjNWFkNmQ2NDhjYjY5Y2M5ZGVjIiwiYXVkIjpbImh0dHBzOi8vc2Vlay9hcGkvY2FuZGlkYXRlIiwiaHR0cHM6Ly9zZWVrYW56Lm9ubGluZWF1dGgucHJvZC5vdXRmcmEueHl6L3VzZXJpbmZvIl0sImlhdCI6MTcxOTExMDk0OSwiZXhwIjoxNzE5MTE0NTQ5LCJzY29wZSI6Im9wZW5pZCBwcm9maWxlIGVtYWlsIG9mZmxpbmVfYWNjZXNzIiwiYXpwIjoicUdQdWZVZzVpQmYxczU3c2ZYbDZnQmRHRjlKWUluQkkifQ.cMK1evomjXYCLuziMelb6vDYo2kDI_51N6ElsnS3lgrc6PHSrk5oRgqpmndyf3mpRFsZQh7kntziXkGSYOy-EGTejF4AtNdwG3ot17lTmVJiDjXnUn1Q3KoFb_P9VNg09c_wRdQqceAlEkXBvLQCxDJ-A59HVlzrlqZTw6zCvh2nfjt0Um-Ktm3OcD1mCWhAOUE9FFCDMql4aZSsK8pL0K6EJlmgR7qvtAMB3Q3vOTdqcOmXyKJAVPEQSc9xFP07-dtmRf7HFcECb9zqKZwi93zTXQx-nJRw_O4qxLy2XpUhex_fK2z8ceM07ifPJqsiwUSaQCnUfsMK8vsIZE98fg',
    'sec-ch-ua-mobile: ?1',
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36',
    'accept: application/json',
    'content-type: application/json',
    'seek-request-brand: jobstreet',
    'x-seek-site: Chalice',
    'x-seek-checksum: 12d758c8',
    'sec-ch-ua-platform: "Android"',
    'sec-fetch-site: same-origin',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://www.jobstreet.co.id/id/IT-Support-jobs-in-information-communication-technology?sortmode=ListedDate&subclassification=6288%2C6289%2C6291%2C6284%2C6293%2C6303',
    'accept-encoding: gzip, deflate, br, zstd',
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'cookie: sol_id=ed42b106-be5a-4cb0-ac56-8bed8c4c4afa; JobseekerSessionId=5e5c8d5c-f0e4-4086-962f-b980277e26ae; JobseekerVisitorId=5e5c8d5c-f0e4-4086-962f-b980277e26ae; _fbp=fb.2.1718083389107.318394605798892147; _hjSessionUser_640499=eyJpZCI6IjRjOGQ2NjViLTQ0MjgtNTU3NS1hMDYwLTdjNTIwYWRiZjBkNiIsImNyZWF0ZWQiOjE3MTgwODMzODkxOTQsImV4aXN0aW5nIjp0cnVlfQ==; registeredCandidateId=575724648; _gcl_au=1.1.154234286.1718083388.454956527.1718103130.1718103268; last-known-sol-user-id=52a66dd46f924110d7f91ef45f2461914f03ccf5ce7fd8fb34fd0e6081f432b77a3dc63cf648ab78e302062f3008053b4eb7ddf4fbb876d1b312fb1e3b9705c1e47150f4d533e3d2a88abdc67c0996f21d061a04cd3d23259f99218c3d9b560dcb5bda98dbd49accfaf1de0509bf54178966c71b7c2d5d9aec018e2dccc331bf761175c8bcabd362993d36923e462bcd7c9ae92bac81f17089fa5f2dc9f46289e0c8cbb9827846; ajs_anonymous_id=6e02af051b749b8c9f80a1a54997dcc3; _ga=GA1.1.610979194.1718285237; _hjSessionUser_3481653=eyJpZCI6ImFiOWMxYzdmLTVlZjYtNTgwMC04MDhkLTg1MzliOGExOTI4NiIsImNyZWF0ZWQiOjE3MTgyODUyMzkxNjQsImV4aXN0aW5nIjp0cnVlfQ==; _ga_T758HYTLV4=GS1.1.1718643302.2.1.1718643341.21.0.0; _legacy_auth0.qGPufUg5iBf1s57sfXl6gBdGF9JYInBI.is.authenticated=true; auth0.qGPufUg5iBf1s57sfXl6gBdGF9JYInBI.is.authenticated=true; da_sa_candi_sid=1719079551994; _hjSession_640499=eyJpZCI6ImYyMzM5MmE5LTk4ZmMtNGE1My04ZDdjLTc4NDdiZDE0MzM2ZCIsImMiOjE3MTkwNzk1NjEwMTksInMiOjAsInIiOjAsInNiIjowLCJzciI6MCwic2UiOjAsImZzIjowLCJzcCI6MH0=; __cf_bm=_V_jbPzlLRZwfFi9igPqH3sGdNKWfCfBvgI9sglA7xw-1719079647-1.0.1.1-AK9kIsV1LafZ0bb7mrPcmJRVWyc3mTGVOfChCdUML7W1pqSsxtjRr6w31hoTmgD4v7WTFyK09oZoAUd8HorEYQ; da_cdt=visid_019005bff338001a297705dd30d30006f001c067005a9-sesid_1719079551994; _hjHasCachedUserAttributes=true; main=V%7C2~P%7Cjobsearch~K%7CIT%20Support~I%7C6281~O%7C6288%2C6289%2C6291%2C6284%2C6293%2C6303~OSF%7Cquick&set=1719079814324/V%7C2~P%7Cjobsearch~K%7CIT%20Support~SORT%7CListedDate~OSF%7Cquick&set=1719079748276/V%7C2~P%7Cjobsearch~I%7C6281~O%7C6288%2C6289%2C6291%2C6300%2C6293%2C6290%2C6299~SORT%7CListedDate~OSF%7Cquick&set=1718671231302; da_searchTerm=undefined; utag_main=v_id:019005bff338001a297705dd30d30006f001c067005a9$_sn:11$_se:21%3Bexp-session$_ss:0%3Bexp-session$_st:1719081620466%3Bexp-session$ses_id:1719079551994%3Bexp-session$_pn:10%3Bexp-session$dc_visit:1$dc_event:255%3Bexp-session$dc_region:ap-east-1%3Bexp-session$_prevpage:search%20results%3Bexp-1719083420519; _dd_s=rum=0&expire=1719080724008&logs=1&id=7f4b4302-795a-4dd1-8c53-b6458f5ab17a&created=1719079687055'
    ]);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}
function getInfo($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_ENCODING, "gzip");
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: www.jobstreet.co.id',
    'sec-ch-ua: "Google Chrome";v="125", "Chromium";v="125", "Not.A/Brand";v="24"',
    'seek-request-country: ID',
    'sec-ch-ua-mobile: ?1',
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36',
    'accept: application/json, text/plain, */*',
    'seek-request-brand: jobstreet',
    'x-seek-site: Chalice',
    'x-seek-checksum: 12d758c8',
    'sec-ch-ua-platform: "Android"',
    'sec-fetch-site: same-origin',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://www.jobstreet.co.id/id/IT-Support-jobs-in-information-communication-technology?sortmode=ListedDate&subclassification=6288%2C6289%2C6291%2C6284%2C6293%2C6303',
    'accept-encoding: gzip, deflate, br, zstd',
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'cookie: sol_id=ed42b106-be5a-4cb0-ac56-8bed8c4c4afa; JobseekerSessionId=5e5c8d5c-f0e4-4086-962f-b980277e26ae; JobseekerVisitorId=5e5c8d5c-f0e4-4086-962f-b980277e26ae; _fbp=fb.2.1718083389107.318394605798892147; _hjSessionUser_640499=eyJpZCI6IjRjOGQ2NjViLTQ0MjgtNTU3NS1hMDYwLTdjNTIwYWRiZjBkNiIsImNyZWF0ZWQiOjE3MTgwODMzODkxOTQsImV4aXN0aW5nIjp0cnVlfQ==; registeredCandidateId=575724648; _gcl_au=1.1.154234286.1718083388.454956527.1718103130.1718103268; last-known-sol-user-id=52a66dd46f924110d7f91ef45f2461914f03ccf5ce7fd8fb34fd0e6081f432b77a3dc63cf648ab78e302062f3008053b4eb7ddf4fbb876d1b312fb1e3b9705c1e47150f4d533e3d2a88abdc67c0996f21d061a04cd3d23259f99218c3d9b560dcb5bda98dbd49accfaf1de0509bf54178966c71b7c2d5d9aec018e2dccc331bf761175c8bcabd362993d36923e462bcd7c9ae92bac81f17089fa5f2dc9f46289e0c8cbb9827846; ajs_anonymous_id=6e02af051b749b8c9f80a1a54997dcc3; _ga=GA1.1.610979194.1718285237; _hjSessionUser_3481653=eyJpZCI6ImFiOWMxYzdmLTVlZjYtNTgwMC04MDhkLTg1MzliOGExOTI4NiIsImNyZWF0ZWQiOjE3MTgyODUyMzkxNjQsImV4aXN0aW5nIjp0cnVlfQ==; _ga_T758HYTLV4=GS1.1.1718643302.2.1.1718643341.21.0.0; _legacy_auth0.qGPufUg5iBf1s57sfXl6gBdGF9JYInBI.is.authenticated=true; auth0.qGPufUg5iBf1s57sfXl6gBdGF9JYInBI.is.authenticated=true; da_sa_candi_sid=1719079551994; _hjSession_640499=eyJpZCI6ImYyMzM5MmE5LTk4ZmMtNGE1My04ZDdjLTc4NDdiZDE0MzM2ZCIsImMiOjE3MTkwNzk1NjEwMTksInMiOjAsInIiOjAsInNiIjowLCJzciI6MCwic2UiOjAsImZzIjowLCJzcCI6MH0=; __cf_bm=_V_jbPzlLRZwfFi9igPqH3sGdNKWfCfBvgI9sglA7xw-1719079647-1.0.1.1-AK9kIsV1LafZ0bb7mrPcmJRVWyc3mTGVOfChCdUML7W1pqSsxtjRr6w31hoTmgD4v7WTFyK09oZoAUd8HorEYQ; da_cdt=visid_019005bff338001a297705dd30d30006f001c067005a9-sesid_1719079551994; _hjHasCachedUserAttributes=true; main=V%7C2~P%7Cjobsearch~K%7CIT%20Support~I%7C6281~O%7C6288%2C6289%2C6291%2C6284%2C6293%2C6303~OSF%7Cquick&set=1719079814324/V%7C2~P%7Cjobsearch~K%7CIT%20Support~SORT%7CListedDate~OSF%7Cquick&set=1719079748276/V%7C2~P%7Cjobsearch~I%7C6281~O%7C6288%2C6289%2C6291%2C6300%2C6293%2C6290%2C6299~SORT%7CListedDate~OSF%7Cquick&set=1718671231302; da_searchTerm=undefined; utag_main=v_id:019005bff338001a297705dd30d30006f001c067005a9$_sn:11$_se:21%3Bexp-session$_ss:0%3Bexp-session$_st:1719081620466%3Bexp-session$ses_id:1719079551994%3Bexp-session$_pn:10%3Bexp-session$dc_visit:1$dc_event:255%3Bexp-session$dc_region:ap-east-1%3Bexp-session$_prevpage:search%20results%3Bexp-1719083420519; _dd_s=rum=0&expire=1719080724008&logs=1&id=7f4b4302-795a-4dd1-8c53-b6458f5ab17a&created=1719079687055'
    ]);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}
function prettyprint($data){
  $raw = json_decode($data, true);
  $pretty_json = json_encode($raw, JSON_PRETTY_PRINT);
  return $pretty_json;
}
  
$info = getInfo($url_Search);
// Cek jika data berhasil didapat

foreach ($raw['data'] ?? [] as $item) {
    #payload
    $id = $item['id'];
    $token=$item['solMetadata']['searchRequestToken'];
    
    #display jobinfo
    #echo 'ID: ' . ($item['id'] ?? 'N/A') . PHP_EOL;
    #echo 'COMPANY: ' . ($item['companyName'] ?? 'N/A') . PHP_EOL;
    #echo 'ROLE: ' . ($item['roleId'] ?? 'N/A') . PHP_EOL;
    #echo 'REALEASE: ' . ($item['listingDateDisplay'] ?? 'N/A') . PHP_EOL;
    #echo 'LOCATION: ' . ($item['jobLocation']['label'] ?? 'N/A') . PHP_EOL;
    #echo("\n");
}
$data_Question = '[{"operationName":"GetJobApplicationProcess","variables":{"jobId":"76752072","isAuthenticated":true,"locale":"id-ID"},"query":"query GetJobApplicationProcess($jobId: ID!, $isAuthenticated: Boolean!, $locale: Locale) {\n  jobApplicationProcess(jobId: $jobId) {\n    ...LocationFragment\n    ...ClassificationFragment\n    ...DocumentsFragment\n    ...QuestionnaireFragment\n    job {\n      ...JobFragment\n      __typename\n    }\n    linkOut\n    extractedRoleTitles\n    __typename\n  }\n}\n\nfragment LocationFragment on JobApplicationProcess {\n  location {\n    id\n    name\n    __typename\n  }\n  state {\n    id\n    __typename\n  }\n  area {\n    id\n    name\n    __typename\n  }\n  __typename\n}\n\nfragment ClassificationFragment on JobApplicationProcess {\n  classification {\n    id\n    name\n    subClassification {\n      id\n      name\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment DocumentsFragment on JobApplicationProcess {\n  documents {\n    lastAppliedResumeIdPrefill @include(if: $isAuthenticated)\n    selectionCriteriaRequired\n    lastWrittenCoverLetter @include(if: $isAuthenticated) {\n      content\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment QuestionnaireFragment on JobApplicationProcess {\n  questionnaire {\n    questions @include(if: $isAuthenticated) {\n      id\n      text\n      __typename\n      ... on SingleChoiceQuestion {\n        lastAnswer {\n          id\n          text\n          uri\n          __typename\n        }\n        options {\n          id\n          text\n          uri\n          __typename\n        }\n        __typename\n      }\n      ... on MultipleChoiceQuestion {\n        lastAnswers {\n          id\n          text\n          uri\n          __typename\n        }\n        options {\n          id\n          text\n          uri\n          __typename\n        }\n        __typename\n      }\n      ... on PrivacyPolicyQuestion {\n        url\n        options {\n          id\n          text\n          uri\n          __typename\n        }\n        __typename\n      }\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment JobFragment on Job {\n  id\n  createdAt {\n    shortLabel\n    __typename\n  }\n  content\n  title\n  advertiser {\n    id\n    name(locale: $locale)\n    __typename\n  }\n  abstract\n  source\n  products {\n    branding {\n      id\n      logo {\n        url\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  tracking {\n    hasRoleRequirements\n    __typename\n  }\n  __typename\n}"}]';
$Question = getQuestion($url_Question,$data_Question);
echo(prettyprint($Question));


#saved jobinfo

$file = 'respon.json';
if (file_put_contents($file, $pretty_json )) {
    echo "Data berhasil disimpan ke $file";
} else {
    echo "Gagal menyimpan data ke $file";
}