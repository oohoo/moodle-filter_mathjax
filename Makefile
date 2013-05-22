DEPLOY_NAME = mathjax.zip

# Deploys the filter as a zip file
deploy:
	make clean
	mkdir mathjax
	cp -r lang mathjax
	cp -r vendor mathjax
	cp -r filter.php mathjax
	cp -r version.php mathjax
	zip -r ${DEPLOY_NAME} mathjax
	rm -rf mathjax

# Cleans the repository
clean:
	rm -rf ${DEPLOY_NAME}