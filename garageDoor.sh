#!/bin/bash

gpio mode 7 out
sleep 2
gpio mode 7 in


echo Garage door button has been pressed!
