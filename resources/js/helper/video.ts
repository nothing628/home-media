export function formatViewsCount(views: number): string {
    const intl = Intl.NumberFormat();

    return intl.format(views);
}
