!function(i){"use strict";function r(t,n,a){return i.chain(t,function(e){i.isElm(e)&&i.each(i.toArray(n),function(t){var n,r="data-"+t;i.hasAttr(e,r)&&((n=i.attr(e,r))&&n.length&&i.attr(e,t,n),a&&i.removeAttr(e,r))})})}function e(t,a,u,c){i.isUnd(c)&&(c=!0);return i.chain(t,function(t){var n,r,e;i.isElm(t)&&(n=t.parentNode,r=i.equal(n,"picture"),e=null,c?e=r?n:t:r&&(e=n),i.isElm(e)&&(e=e.getElementsByTagName("source"),a=a||(r?"srcset":"src"),e.length&&i(e).mapAttr(a,u)))})}i.mapAttr=r,i.fn.mapAttr=function(t,n){return r(this,t,n)},i.mapSource=e,i.fn.mapSource=function(t,n,r){return e(this,t,n,r)}}(dBlazy);
