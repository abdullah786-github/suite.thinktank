<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'apimatic/jsonmapper' => 'v2.0.3@f7588f1ab692c402a9118e65cb9fd42b74e5e0db',
  'apimatic/unirest-php' => '2.3.0@52e226fb3b7081dc9ef64aee876142a240a5f0f9',
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.235.2@9776dc3235bf7c0fce59d5c70e3ade88d0d095d2',
  'bacon/bacon-qr-code' => '2.0.7@d70c840f68657ce49094b8d91f9ee0cc07fbf66c',
  'barryvdh/laravel-dompdf' => 'v2.0.0@1d47648c6cef37f715ecb8bcc5f5a656ad372e27',
  'barryvdh/laravel-ide-helper' => 'v2.12.3@3ba1e2573b38f72107b8aacc4ee177fcab30a550',
  'barryvdh/laravel-translation-manager' => '0.6.4@bb8d8f5cffbead1fe8b115a4be8c0d1b9209680c',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'berkayk/onesignal-laravel' => 'v1.0.10@4b3bc2ff3376f5adb224948b759ccf052e3e6b7b',
  'billowapp/payfast' => '0.5.0@3912032abd18cf4f90890aa41ac774b4971100a2',
  'billowapp/show-me-the-money' => '0.4.3@70409331d4ca1cdcd458589cdbd12105f0bca599',
  'brick/math' => '0.10.2@459f2781e1a08d52ee56b0b1444086e038561e3f',
  'clue/stream-filter' => 'v1.6.0@d6169430c7731d8509da7aecd0af756a5747b78e',
  'composer/ca-bundle' => '1.3.3@30897edbfb15e784fe55587b4f73ceefd3c4d98c',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/pcre' => '3.0.0@e300eb6c535192decd27a85bc72a9290f0d6b3bd',
  'craftsys/msg91-laravel' => 'v0.13.2@81f26b151e7582d0102d8b1ecd69ab5cb1fee98d',
  'craftsys/msg91-laravel-notification-channel' => 'v0.6.2@791f8c1286d4d2ca0d54718ced27dfde86d8612c',
  'craftsys/msg91-php' => 'v0.15.2@85e52b30078ef5eccffbe4c8577fc762e3b2878b',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/dbal' => '3.4.4@4cbbe6e4b9ef6c69d5f4c968c637476f47bb54f5',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.1.2@eb2ecf80e3093e8f3c2769ac838e27d8ede8e683',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dompdf/dompdf' => 'v2.0.0@79573d8b8a141ec8a17312515de8740eed014fa9',
  'dragonmantank/cron-expression' => 'v3.3.1@be85b3f05b46c39bbc0d95f6c071ddff669510fa',
  'edujugon/push-notification' => 'dev-master@cee8303bb5298183bdfefe70a06cbaea988fd0e1',
  'egulias/email-validator' => '3.2.1@f88dcf4b14af14a98ad96b14b2b317969eab6715',
  'eluceo/ical' => '0.16.1@7043337feaeacbc016844e7e52ef41bba504ad8f',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'froiden/envato' => '1.8.8@00bdc4cae62fb33d7367caa8d5c42fb70c2f0457',
  'froiden/laravel-installer' => '1.6.5@c0256df51c605740f43b4ab0649e8b1afeeeca16',
  'froiden/laravel-rest-api' => '9.0.4@ba64767206dfe6e70c6f2092de3ee849bb42b157',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'fruitcake/php-cors' => 'v1.2.0@58571acbaa5f9f462c9c77e911700ac66f446d4e',
  'google/apiclient' => 'v2.12.6@f92aa126903a9e2da5bd41a280d9633cb249e79e',
  'google/apiclient-services' => 'v0.265.0@a23754daa452e26a8dd31a7848863c67a2e3d67e',
  'google/auth' => 'v1.22.0@da4037df770027c8f7163595a29ec434f705f8b1',
  'graham-campbell/bounded-cache' => 'v2.1.0@ee07b861fbcc57706d4eb93ab23430d8b19db280',
  'graham-campbell/gitlab' => 'v6.0.0@0b79c8fc6a351b5a3d3afaa912008ed93a738092',
  'graham-campbell/manager' => 'v4.7.0@b4cafa6491b9c92ecf7ce17521580050a27b8308',
  'graham-campbell/markdown' => 'v14.0.0@36dc081ad00ee5abedff939cfccbfc5008eed8eb',
  'graham-campbell/result-type' => 'v1.1.0@a878d45c1914464426dc94da61c9e1d36ae262a8',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '2.4.1@69568e4293f4fa993f3b0e51c9723e1e17c41379',
  'http-interop/http-factory-guzzle' => '1.2.0@8f06e92b95405216b237521cc64c804dd44c4a81',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'jean85/pretty-package-versions' => '2.0.5@ae547e455a3d8babd07b96966b17d7fd21d9c6af',
  'kingflamez/laravelrave' => 'v4.4.0@67737d8ed3847efd5a66e88fa2f78fa07bf9c7ac',
  'laminas/laminas-diactoros' => '2.17.0@5b32597aa46b83c8b85bb1cf9a6ed4fe7dd980c5',
  'laravel-lang/lang' => '6.1.4@18a7845e813e737a56a7f164301d5014b536950c',
  'laravel-notification-channels/onesignal' => 'v2.4.0@3319787a7a5f4dbea588e594dcd419714cfd2155',
  'laravel-notification-channels/telegram' => '2.1.0@76299fa06f48cb175e17ea951ccf3b185329a1ac',
  'laravel-notification-channels/twilio' => '3.2.0@c14bafbd59d59aed94e73cb83d89c0d33ad88c79',
  'laravel/fortify' => 'v1.13.3@cde06120605b8bb038142b03425c67fc97d047d1',
  'laravel/framework' => 'v9.28.0@396a89e1f3654123d1c7f56306051212e5c75bc0',
  'laravel/helpers' => 'v1.5.0@c28b0ccd799d58564c41a62395ac9511a1e72931',
  'laravel/serializable-closure' => 'v1.2.1@d78fd36ba031a1a695ea5a406f29996948d7011b',
  'laravel/slack-notification-channel' => 'v2.4.0@060617a31562c88656c95c5971a36989122d4b53',
  'laravel/socialite' => 'v5.5.5@ce8b2f967eead5a6bae74449e207be6f8046edc3',
  'laravel/tinker' => 'v2.7.2@dff39b661e827dae6e092412f976658df82dbac5',
  'laravel/vonage-notification-channel' => 'v3.0.0@c1245b19bfa3c6f7a45ef103c6bbc3437b76040a',
  'laravelcollective/html' => 'v6.3.0@78c3cb516ac9e6d3d76cad9191f81d217302dea6',
  'lcobucci/clock' => '2.2.0@fb533e093fd61321bfcbac08b131ce805fe183d3',
  'lcobucci/jwt' => '4.2.1@72ac6d807ee51a70ad376ee03a2387e8646e10f3',
  'league/commonmark' => '2.3.5@84d74485fdb7074f4f9dd6f02ab957b1de513257',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '3.2.1@81aea9e5217084c7850cd36e1587ee4aad721c6b',
  'league/flysystem-aws-s3-v3' => '3.2.0@257893ef7398b3c9255b26dff8b0118bb93fc5ff',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth1-client' => 'v1.10.1@d6365b901b5c287dd41f143033315e2f777e1167',
  'league/oauth2-client' => '2.6.1@2334c249907190c132364f5dae0287ab8666aa19',
  'm4tthumphrey/php-gitlab-api' => '11.8.0@38380c933ada8fd2099bc611f0de23c339cdb04a',
  'maatwebsite/excel' => '3.1.40@8a54972e3d616c74687c3cbff15765555761885c',
  'macellan/laravel-zip' => '1.0.5@0c40d22de710acb5e4da8620663fb336741cdc5d',
  'macsidigital/laravel-api-client' => '4.0.2@a49dbe7c88b6edf29624bab06dd31d5a8b7faa63',
  'macsidigital/laravel-oauth2-client' => '2.0.0@6aad67ed5c26efce2a1127a3eff66045883c13e9',
  'macsidigital/laravel-zoom' => '5.0.3@cfc10998bc401e5e4463ae11aaa3c3adbfba4a47',
  'maennchen/zipstream-php' => '2.2.1@211e9ba1530ea5260b45d90c9ea252f56ec52729',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'masterminds/html5' => '2.7.6@897eb517a343a2281f11bc5556d6548db7d93947',
  'mitchbred/entrust' => '2.1@b13b5839b47a4834ba29fdfea2e9f8b0d7d53204',
  'mollie/laravel-mollie' => 'v2.19.1@605d1f6038bf112ed88aecdbb10b1fbd8f49ee7e',
  'mollie/mollie-api-php' => 'v2.46.0@343e55d65cfe07ac1e68e141682a971a10b3bae4',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/php-enum' => '1.8.4@a867478eae49c9f59ece437ae7f9506bfaa27483',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nesbot/carbon' => '2.62.1@01bc4cdefe98ef58d1f9cb31bdbbddddf2a88f7a',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.7@0af4e3de4df9f1543534beab255ccf459e7a2c99',
  'nikic/php-parser' => 'v4.15.1@0ef6c55a3f47f89d7a374e6f835197a0b5fcf900',
  'nunomaduro/termwind' => 'v1.14.0@10065367baccf13b6e30f5e9246fa4f63a79eb1d',
  'nwidart/laravel-modules' => '9.0.5@f55d45934602750f4955935231dd6ffab7cf1f30',
  'nyholm/psr7' => '1.5.1@f734364e38a876a23be4d906a2a089e1315be18a',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.17.1@ac994053faac18d386328c91c7900f930acadf1e',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'pcinaglia/laraupdater' => '1.0.2@d19d88f0b1c1cbe7a2fdb5505d3d5f434939e8dd',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.4.1@4498b5df7b08e8469f0f8279651ea5de9626ed02',
  'php-http/cache-plugin' => '1.7.5@63bc3f7242825c9a817db8f78e4c9703b0c471e2',
  'php-http/client-common' => '2.5.0@d135751167d57e27c74de674d6a30cef2dc8e054',
  'php-http/discovery' => '1.14.3@31d8ee46d0215108df16a8527c7438e96a4d7735',
  'php-http/httplug' => '2.3.0@f640739f80dfa1152533976e3c112477f69274eb',
  'php-http/message' => '1.13.0@7886e647a30a966a1a8d1dad1845b71ca8678361',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/multipart-stream-builder' => '1.2.0@11c1d31f72e01c738bbce9e27649a7cca829c30e',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpoffice/phpspreadsheet' => '1.24.1@69991111e05fca3ff7398e1e7fca9ebed33efec6',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'phpseclib/phpseclib' => '3.0.16@7181378909ed8890be4db53d289faac5b77f8b05',
  'pragmarx/google2fa' => 'v8.0.1@80c3d801b31fe165f8fe99ea085e0a37834e1be3',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '2.0.0@8707bf3cea6f710bf6ef05491234e3ab06f6432a',
  'psy/psysh' => 'v0.11.8@f455acf3645262ae389b10e9beba0c358aa6994e',
  'pusher/pusher-php-server' => 'v4.1.5@251f22602320c1b1aff84798fe74f3f7ee0504a9',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.4.0@373f7bacfcf3de038778ff27dcce5672ddbf4c8a',
  'razorpay/razorpay' => 'v2.8.4@3f2edc150f6ca035d15ab81382f7f76417de91f6',
  'rmccue/requests' => 'v2.0.4@62bf29e0f1080b4f0f499d30adb6a382e70e9686',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'sentry/sdk' => '3.2.0@6d78bd83b43efbb52f81d6824f4af344fa9ba292',
  'sentry/sentry' => '3.8.0@dc599ef4ac5459fef95cc0414d26ac47e300e1dc',
  'sentry/sentry-laravel' => '2.13.0@c5e74e5fff18014780361fb33a883af9a9fbd900',
  'spatie/db-dumper' => '3.3.0@129b8254b2c9f10881a754a692bd9507b09a1893',
  'spatie/laravel-backup' => '8.1.3@ed0e5246f8c96c5a9badb677d2a6fa8375b5b42b',
  'spatie/laravel-package-tools' => '1.12.1@09f80fa240d44fafb1c70657c74ee44ffa929357',
  'spatie/laravel-signal-aware-command' => '1.2.0@d15a5b69bf715fc557b7034b4abd5a1472ae7ec8',
  'spatie/temporary-directory' => '2.1.1@e2818d871783d520b319c2d38dc37c10ecdcde20',
  'square/square' => '16.0.0.20211117@d532628a0741b47695ac3714f442c09571d95f11',
  'stella-maris/clock' => '0.1.5@447879c53ca0b2a762cdbfba5e76ccf4deca9158',
  'stichoza/google-translate-php' => 'v4.1.6@ea96d2ca42af3e40890cd0ca043d1c3efb46f292',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/cache' => 'v6.0.11@8c98079892d254b4e5806bedf694bddab8fe92b4',
  'symfony/cache-contracts' => 'v3.0.2@1c0a181c9ee221afe4fa55b2d13fc63c5ae14348',
  'symfony/console' => 'v6.0.12@c5c2e313aa682530167c25077d6bdff36346251e',
  'symfony/css-selector' => 'v6.0.11@ab2746acddc4f03a7234c8441822ac5d5c63efe9',
  'symfony/deprecation-contracts' => 'v3.0.2@26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
  'symfony/error-handler' => 'v6.0.11@cb302377e1b862540436f22be9ff07079a5836ae',
  'symfony/event-dispatcher' => 'v6.0.9@5c85b58422865d42c6eb46f7693339056db098a8',
  'symfony/event-dispatcher-contracts' => 'v3.0.2@7bc61cc2db649b4637d331240c5346dcc7708051',
  'symfony/finder' => 'v6.0.11@09cb683ba5720385ea6966e5e06be2a34f2568b1',
  'symfony/http-client' => 'v6.0.12@411f73ad1a797f327d100d27fa5d715b947a8272',
  'symfony/http-client-contracts' => 'v3.0.2@4184b9b63af1edaf35b6a7974c6f1f9f33294129',
  'symfony/http-foundation' => 'v6.0.12@d50ee4795c981638369dfa0b281107365fab2429',
  'symfony/http-kernel' => 'v6.0.12@8f3563e4518cfee24a5cc724434cc60e0818abec',
  'symfony/mailer' => 'v6.0.12@45aad5f8cfb481130e83dc4cb867c0f576182ea9',
  'symfony/mime' => 'v6.0.12@02a11577f2f9522c783179712bdf6d2d3cb9fc1d',
  'symfony/options-resolver' => 'v6.0.3@51f7006670febe4cbcbae177cbffe93ff833250d',
  'symfony/polyfill-ctype' => 'v1.26.0@6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
  'symfony/polyfill-iconv' => 'v1.26.0@143f1881e655bebca1312722af8068de235ae5dc',
  'symfony/polyfill-intl-grapheme' => 'v1.26.0@433d05519ce6990bf3530fba6957499d327395c2',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/polyfill-php81' => 'v1.26.0@13f6d1271c663dc5ae9fb843a8f16521db7687a1',
  'symfony/process' => 'v6.0.11@44270a08ccb664143dede554ff1c00aaa2247a43',
  'symfony/psr-http-message-bridge' => 'v2.1.3@d444f85dddf65c7e57c58d8e5b3a4dbb593b1840',
  'symfony/routing' => 'v6.0.11@434b64f7d3a582ec33fcf69baaf085473e67d639',
  'symfony/service-contracts' => 'v3.0.2@d78d39c1599bd1188b8e26bb341da52c3c6d8a66',
  'symfony/string' => 'v6.0.12@3a975ba1a1508ad97df45f4590f55b7cc4c1a0a0',
  'symfony/translation' => 'v6.0.12@5e71973b4991e141271465dacf4bf9e719941424',
  'symfony/translation-contracts' => 'v3.0.2@acbfbb274e730e5a0236f619b6168d9dedb3e282',
  'symfony/var-dumper' => 'v6.0.11@2672bdc01c1971e3d8879ce153ec4c3621be5f07',
  'symfony/var-exporter' => 'v6.0.10@e3df004a8d0fb572c420a6915cd23db9254c8366',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'twilio/sdk' => '6.41.0@3e6b81216052aac086efd6334a0fc358c38c2e20',
  'tymon/jwt-auth' => 'dev-develop@014be8d493d228d14bbc291b24e835d330c092a0',
  'unicodeveloper/laravel-paystack' => '1.0.8@cc02adde1019bf4ec99bbba2c00c5df185158668',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '2.0.1@b56450eed252f6801410d810c8e1727224ae0743',
  'vonage/client-core' => '3.1.3@52d68cb50b6ec41b453df396495a48a9a2e12eda',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webklex/laravel-imap' => '2.4.0@97c480cc2dd6b76859c5e21ccb4fa6659b7ad6de',
  'webklex/php-imap' => '2.7.2@e22be3ed3760a939cd68b2907969c4b2478e8588',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'yajra/laravel-datatables-buttons' => 'v4.13.3@5c8fb97c26c14408c8933f68d86c6e4823d05740',
  'yajra/laravel-datatables-html' => 'v4.41.1@55895b55539cd776a8cd22dce874d1b6a7b9de8c',
  'yajra/laravel-datatables-oracle' => 'v9.21.2@a7fd01f06282923e9c63fa27fe6b391e21dc321a',
  'amphp/amp' => 'v2.6.2@9d5100cebffa729aaffecd3ad25dc5aeea4f13bb',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'amphp/parallel' => 'v1.4.1@fbc128383c1ffb3823866f71b88d8c4722a25ce9',
  'amphp/parallel-functions' => 'v1.1.0@04e92fcacfc921a56dfe12c23b3265e62593a7cb',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.1.4@76e9495fd6818b43a20167cb11d8a67f7744ee0f',
  'amphp/serialization' => 'v1.0.0@693e77b2fb0b266c3c7d622317f881de44ae94a1',
  'amphp/sync' => 'v1.4.2@85ab06764f4f36d63b1356b466df6111cf4b89cf',
  'barryvdh/laravel-debugbar' => 'v3.7.0@3372ed65e6d2039d663ed19aa699956f9d346271',
  'composer/class-map-generator' => '1.0.0@1e1cb2b791facb2dfe32932a7718cf2571187513',
  'doctrine/collections' => '1.7.2@3fe77330f5591108bbf1315da7377a7e704ed8a0',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'fakerphp/faker' => 'v1.20.0@37f751c67a5372d4e26353bd9384bc03744ec77b',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'gitonomy/gitlib' => 'v1.3.6@33ae0a2e469accc19d1a06bed63ed93dbf368ae2',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'maximebf/debugbar' => 'v1.18.1@ba0af68dd4316834701ecb30a00ce9604ced3ee9',
  'mockery/mockery' => '1.5.0@c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v6.3.0@17f600e2e8872856ff2846243efb74ad4b6da531',
  'nunomaduro/larastan' => 'v2.2.0@980199077a49d71ef7c03b65b9d6bcce1f6d7bad',
  'ondram/ci-detector' => '4.1.0@8a4b664e916df82ff26a44709942dfd593fa6f30',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpmyadmin/sql-parser' => '5.5.0@8ab99cd0007d880f49f5aa1807033dbfa21b1cb5',
  'phpro/grumphp' => 'v1.13.0@3ec61c1678c4c370f02b05fef606fd561d923c8e',
  'phpstan/phpstan' => '1.8.4@eed4c9da531f6ebb4787235b6fb486e2c20f34e5',
  'phpunit/php-code-coverage' => '9.2.17@aa94dc41e8661fe90c7316849907cba3007b10d8',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.24@d0aa6097bef9fd42458a9b3c49da32c6ce6129c5',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.1.0@fb44e1cc6e557418387ad815780360057e40753e',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'seld/jsonlint' => '1.9.0@4211420d25eba80712bff236a98960ef68b866b7',
  'spatie/backtrace' => '1.2.1@4ee7d41aa5268107906ea8a4d9ceccde136dbd5b',
  'spatie/flare-client-php' => '1.3.0@b1b974348750925b717fa8c8b97a0db0d1aa40ca',
  'spatie/ignition' => '1.4.1@dd3d456779108d7078baf4e43f8c2b937d9794a1',
  'spatie/laravel-ignition' => '1.4.1@29deea5d9cf921590184be6956e657c4f4566440',
  'symfony/config' => 'v6.0.11@956d4ec5df274dda91a4cedfccc2bfd063f6f649',
  'symfony/dependency-injection' => 'v6.0.11@5f6246e27475a90a0da5cd704fb5a47880a5d3cc',
  'symfony/dotenv' => 'v6.0.5@1c2288fdfd0787288cd04b9868f879f2212159c4',
  'symfony/filesystem' => 'v6.0.12@a36b782dc19dce3ab7e47d4b92b13cefb3511da3',
  'symfony/yaml' => 'v6.0.12@8c68efb08b038ec02753da6f16e1601a6ed4ef17',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-master@38da79fd3a8b0d8f6665a8e28a8b257f967dfd65',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
