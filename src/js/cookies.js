function setCookie(start_time, end_session_time, total_time, flag, count) {
    document.cookie = "start_time=" + start_time;

    if (end_session_time) {
        document.cookie = "end_session_time=" + end_session_time;
    }
    if (total_time) {
        document.cookie = "total_time=" + total_time;
    }
    if (flag) {
        document.cookie = "flag=" + flag;
    }
    if (count) {
        document.cookie = "count=" + count;
    }

    console.log("document.cookie = " + document.cookie);
}