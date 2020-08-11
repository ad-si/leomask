docs:
	rm -rf $@
	mkdir $@
	cp -r ./img docs/img
	# cp -r ./js docs/js
	cp -r ./styles docs/styles
	echo 'www.leomask.com' > docs/CNAME
	php index.php > docs/index.html
