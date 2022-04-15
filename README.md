# Symfony AWS Messages

## Installation
install symfony cli from [Symfony website](https://symfony.com/download`)

git clone from remote

`git clone git@gitlab.com:filatushkin.nexus/symfony-aws-messages.git`

run composer

`cd symfony-aws-messages/`

`composer install`

for more information: [https://symfony.com/doc/current/setup.html](https://symfony.com/doc/current/setup.html)

## Configuration

Add the following variables to .env file:

`MESSENGER_TRANSPORT_DSN_SQS=https://sqs.{AWS_ZONE}.amazonaws.com/{AWS_PROFILEID}/SqsMessages?access_key={ACCESS_KEY_URL_ENCODED}&secret_key={SECRET_KEY_URL_ENCODED}`

`MESSENGER_TRANSPORT_DSN_SYM=https://sqs.{AWS_ZONE}.amazonaws.com/{AWS_PROFILEID}/SymfonyMessages?access_key={ACCESS_KEY_URL_ENCODED}&secret_key={SECRET_KEY_URL_ENCODED}`

## Usage

1. Start Symfony: `symfony server:start`
2. Ensure symfony is running: `http://localhost:8000`
3. To consume message from AWS SQS: `php bin/console messenger:consume sqsMessages`
4. To send message to AWS SQS: `http://localhost:8000/notify/sqs`

## Message Template Example

### Body
{"content":"Message Text"}
### Header
Content-Type `application/json`<br>type `App\Message\SqsNotification`
