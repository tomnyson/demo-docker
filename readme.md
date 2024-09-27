docker build -t my-nginx .
docker tag my-cv tomnyson/my-cv
docker login
docker push tomnyson/my-cv