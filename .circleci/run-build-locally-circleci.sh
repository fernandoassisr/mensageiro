#!/usr/bin/env bash
curl --user ${CIRCLE_TOKEN}: \
    --request POST \
    --form revision=8eeec95\
    --form config=@config.yml \
    --form notify=false \
        https://circleci.com/api/v1.1/project/bitbucket/fernandoassissr/mensageiro/tree/master