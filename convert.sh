mkdir $2
mv $1 $2/
cd $2
ffmpeg -i $1 -vf "scale=-2:1080" -c:v h264 -profile:v main -preset medium -crf 23 -sc_threshold 0 -g 48 -keyint_min 48 -hls_time 4 -hls_playlist_type vod -hls_segment_filename "output_1080p_%03d.ts" output_1080p.m3u8 -vf "scale=-2:720" -c:v h264 -profile:v main -preset medium -crf 23 -sc_threshold 0 -g 48 -keyint_min 48 -hls_time 4 -hls_playlist_type vod -hls_segment_filename "output_720p_%03d.ts" output_720p.m3u8 -vf "scale=-2:480" -c:v h264 -profile:v main -preset medium -crf 23 -sc_threshold 0 -g 48 -keyint_min 48 -hls_time 4 -hls_playlist_type vod -hls_segment_filename "output_480p_%03d.ts" output_480p.m3u8

echo "#EXTM3U
#EXT-X-VERSION:3

#EXT-X-STREAM-INF:BANDWIDTH=5000000,RESOLUTION=1920x1080
output_1080p.m3u8

#EXT-X-STREAM-INF:BANDWIDTH=2500000,RESOLUTION=1280x720
output_720p.m3u8

#EXT-X-STREAM-INF:BANDWIDTH=1000000,RESOLUTION=854x480
output_480p.m3u8" > master.m3u8
