# Changelog

Trying as hard as I can to stick to semantic versionning.

## 4.5.1 (2019-08-23)
- Fixes duplacata in stats when a user would input province codes with capitalized letters.

## 4.5.0 (2019-08-23)
- Added an index page at the root of api.salestaxapi.ca
- Error logging is set to daily rather than single file.
- Added a check for province code validity in controller when needed.
- Only increment API stats when request is valid.

## 4.4.0 (2019-06-01)
- Removed ability to register from the frontend.

## 4.3.0 (2019-06-01)
- Upgraded to Laravel 5.8.
- Changed cahce values from minutes to seconds, but still cached for one day.

## 4.2.0 (2019-05-31)
- Added `incoming_changes` value to `gst` and `:province` endpoint.

## 4.1.0 (2019-05-31)
- Upgraded to latest Laravel version.

## 4.0.1 (2017-05-29)
- Fixed cache name that where overtaking themselves when querying provinces rate

## 4.0.0 (2017-05-28)
- API V2, a lot has changed. See readme for current usage.
- Now collecting number of time an endpoint has been requested, for stats purpose. Using jobs so we don't make the request longer to process.

## 3.2.0 (2017-05-28)
- Now caching response for 24h and invalidate cache on store or update or a rate.

## 3.1.0 (2017-05-28)
- Upgraded to Laravel 5.4
- Passage to database based rates

## 3.0.2 (2017-02-01)
- Changes effective PEI tax rate, as pointed out by @robert-waggott in #4.

## 3.0.1 (2016-10-25)
- Fixes a stupid code 18.

## 3.0.0 (2016-10-25)
- If an entity doesn't exists, it will either returns 404 or won't exists in array if requesting `all`;
- Routes now uses "provinces" and "federal" rather than "prov" and "fed".

## 2.0.1 (2016-10-25)
- Fixed documentation;
- Changed default Laravel homepage to customize it lightly.

## 2.0.0 (2016-10-25)
- Added documentation;
- Removed the need to `/api` in the routes so I can better operate from the subdomain.

## 1.0.0 (2016-10-24)
### Added
- First API routes are out in the wild.
