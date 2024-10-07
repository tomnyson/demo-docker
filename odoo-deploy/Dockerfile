# Use the official Odoo image
FROM odoo:16.0

# Set environment variables
ENV LANG C.UTF-8
ENV LC_ALL C.UTF-8

# Copy custom addons to the Odoo addons directory
COPY ./addons /mnt/extra-addons

# Copy your Odoo configuration file
COPY ./odoo.conf /etc/odoo/odoo.conf

# Set the entrypoint
CMD ["odoo"]
