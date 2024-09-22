#!/bin/bash

# shellcheck disable=SC2034
COMMAND=$1

  if [[ $COMMAND == "start" ]]; then
      docker compose --env-file .env.dev up;
  fi
  if [[ $COMMAND == "restart" ]]; then
      docker compose --env-file .env.dev restart;
  fi
  if [[ $COMMAND == "stop" ]]; then
      docker compose --env-file .env.dev stop;
  fi
  if [[ $COMMAND == "php" ]]; then
      docker compose --env-file .env.dev exec -it "php" /bin/bash;
      fi
  if [[ $COMMAND == "build" ]]; then
      docker compose --env-file .env.dev up --build;
      fi
