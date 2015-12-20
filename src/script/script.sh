if [[ script/log.log -a ]]; then
	echo "***" >> script/log.log
elif [[ true ]]; then
	touch script/log.log
	echo "elif ran" > /home/toor/debug
fi

echo "Working on file $1" >> script/log.log
whoami >> script/log.log

for i in {0..4}; do
	echo $i >> script/log.log
	sleep 1
done