<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethod File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* AuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AuthenticationMethod extends Enum
{
    /**
    * The Enum AuthenticationMethod
    */
    const NONE = "none";
    const CLAIM_IN_ACCESS_TOKEN = "claimInAccessToken";
    const PASSWORD = "password";
    const SMS = "sms";
    const VOICE_CALL = "voiceCall";
    const HARDWARE_OATH_TOKEN = "hardwareOathToken";
    const SOFTWARE_OATH_TOKEN = "softwareOathToken";
    const FIDO2_TOKEN = "fido2Token";
    const AUTHENTICATOR_APP_PUSH_NOTIFICATION = "authenticatorAppPushNotification";
    const AUTHENTICATOR_APP_PASSWORDLESS_SIGN_IN = "authenticatorAppPasswordlessSignIn";
    const FEDERATED = "federated";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}