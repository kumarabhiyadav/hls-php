
mkdir $2
mv $1 $2/
cd $2
ffmpeg -i $1 -y -map 0:0 -map 0:1 -map 0:0 -map 0:1 -s:v:0 2160x3840 -c:v:0 libx264 -b:v:0 2000k -s:v:1 960x540 -c:v:1 libx264 -b:v:1 365k -master_pl_name master.m3u8 -f hls -max_muxing_queue_size 1024 -hls_time 1 -hls_list_size 0 -hls_segment_filename fileSequence%d.ts ./video.m3u8
