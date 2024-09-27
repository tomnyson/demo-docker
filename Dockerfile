# image cha
FROM nginx:alpine

# folder mặc đinh của source
WORKDIR /usr/share/nginx/html

# xóa folder mặc định của nginx
RUN rm -rf ./*

# copy folder html đến /usr/share/nginx/html
COPY ./html /usr/share/nginx/html

# cổng chạy mặc đinh
EXPOSE 80

# chạy nginx service
CMD ["nginx", "-g", "daemon off;"]
