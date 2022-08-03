import { DateTime } from "luxon";

export function formatViewsCount(views: number): string {
    const intl = Intl.NumberFormat();

    return intl.format(views);
}

export function formatVideoPublishAt(publishAt: string): string {
    const publishAtDate = DateTime.fromISO(publishAt);

    return publishAtDate.toLocaleString(DateTime.DATE_MED);
}

export function formatChannelSubscriberCount(subscribers: number): string {
    const intl = Intl.NumberFormat(undefined, {
        notation: "compact",
    });

    return intl.format(subscribers);
}
