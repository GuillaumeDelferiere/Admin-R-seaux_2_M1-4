FROM ubuntu/bind9:9.18-22.04_beta

COPY named.conf /etc/bind/named.conf
COPY m1-4.zone /etc/bind/m1-4.zone

RUN chown -R bind:bind /etc/bind/
RUN mkdir -p /var/cache/bind
RUN chown -R bind:bind /var/cache/bind

CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]
