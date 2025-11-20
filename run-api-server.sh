#!/bin/bash

IPAPI="192.168.3.193"
PORTAPI="9191"

cd php/
php -S ${IPAPI}:${PORTAPI} 

exit 0
