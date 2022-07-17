export function convertBytesToMb(size: number): string {
    const mb = Math.pow(1024, 2);
    return (size / mb).toFixed(2);
}

export function convertSecondsToTimestamp(seconds: number): string {
    const minuteRemain = Math.floor(seconds / 60);
    const secondRemain = (seconds - minuteRemain * 60).toFixed(0);

    return (
        minuteRemain.toString().padStart(2, "0") +
        ":" +
        secondRemain.padStart(2, "0")
    );
}
