#!/bin/bash

IPAPI="localhost"
PORTAPI="9191"

cd php/
php -S ${IPAPI}:${PORTAPI} 

exit 0
