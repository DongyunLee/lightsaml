# Changelog

All notable changes will be documented in this file.

## [4.0.1] - 2022-08-05
+ Change package name in banner.
+ Add PHPStan to CI.
+ Clean code with PHPStan.
+ Clean code by removing unnecessary backslash.

## [4.0.0] - 2022-06-23
+ Replace symfony/event-dispatcher dependency by psr/event-dispatcher.

## [3.0.3] - 2022-05-29
+ Change package description.

## [3.0.2] - 2022-05-27
+ Fix composer documentation settings.

## [3.0.1] - 2022-05-27
+ Fix Documentation.

## [3.0.0] - 2022-05-27
+ Move doc in dedicated repository.
+ Move resources files for tests in tests directory.
+ Drop deprecated files.
+ Move schemas in dedicated package.
+ Update composer metadata.
+ Update Readme.

## [2.3.4] - 2022-05-27
+ Fix LightSaml\Model\XmlDSig\SignatureXmlReader::validate() exception catching

## [2.3.3] - 2022-03-24
+ Fix return types in LightSaml\Context\AbstractContext & LightSaml\Meta\ParameterBag

## [2.3.2] - 2022-03-02
+ Fix param types in LightSaml\Model\Assertion\Conditions class

## [2.3.1] - 2022-03-01
+ Fix input id in SamlPostResponse

## [2.3.0] - 2022-02-09
+ Update to symfony packages 6.0

## [2.2.0] - 2022-02-09
+ Run tests by GitHub's actions.

## [2.1.0] - 2021-04-07
+ Update PHPUnit 8.4+

## [2.0.1] - 2021-04-07
+ Clean code with php-cs-fixer

## [2.0.0] - 2021-01-20
+ PHP 7.2+ & Symfony 5

## [1.0.2] - 2014-07-09
+ Logout Request Builder #5
+ Improve code metric #7
+ Support for formatted certificate in message XML #10
+ "KeyDescriptor" elment "use" attribute should be optional #12
+ Support for EntitiesDescriptor element #11
+ InResponseTo attribute optional for StatusResponse #14 #15
+ InvalidArgumentException at LogoutRequest ->setNotOnOrAfter() #16
+ New method in Signature Validator for array of keys #18
+ New method EntitiesDescriptor::getByEntityId #19
+ Fix AuthnRequest send and Response receive bidnings and url #20
+ Logging of sent/received messages in Binding #23
+ NameIDPolicy made optional in AuthnRequest? #21
+ SignatureMethod element made optional #24
+ StatusCode missing from status #26
+ Optional constructor arguments 037a595fc
+ Support for IdpSsoDescriptor Attributes & NameIdFormat e37b037d1
