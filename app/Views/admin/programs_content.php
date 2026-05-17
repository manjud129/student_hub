<!-- programs_content.php — diinjeksi via fetch ke #admin-content -->

<div class="space-y-6">

    <!-- Header -->
    <div class="flex items-start justify-between gap-4 flex-wrap">
        <div>
            <div class="mb-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-400 text-xs font-semibold uppercase tracking-wider">
                    <i data-lucide="badge-check" class="w-3 h-3"></i>
                    Manajemen Beasiswa
                </span>
            </div>
            <h2 class="text-2xl font-extrabold text-white">Program Beasiswa Pending</h2>
            <p class="text-slate-400 text-sm mt-1">Daftar beasiswa yang menunggu persetujuan admin.</p>
        </div>
    </div>

    <?php if (empty($programs)): ?>

        <!-- Empty State -->
        <div class="flex flex-col items-center justify-center py-20 bg-surface border border-borderCol rounded-2xl text-center">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500/20 to-indigo-500/20 border border-purple-500/20 flex items-center justify-center mb-5">
                <i data-lucide="award" class="w-8 h-8 text-purple-400"></i>
            </div>
            <h3 class="text-lg font-bold text-white mb-2">Tidak ada program pending</h3>
            <p class="text-slate-400 text-sm max-w-xs">Semua beasiswa sudah disetujui atau belum ada yang diajukan.</p>
        </div>

    <?php else: ?>

        <!-- Count badge -->
        <div class="flex items-center gap-2 px-4 py-2.5 bg-purple-500/10 border border-purple-500/20 rounded-xl w-fit">
            <i data-lucide="award" class="w-4 h-4 text-purple-400 shrink-0"></i>
            <p class="text-sm text-purple-300">
                <strong class="text-white"><?= count($programs) ?> program</strong> menunggu persetujuan
            </p>
        </div>

        <!-- Table -->
        <div class="bg-surface border border-borderCol rounded-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-white/[0.03] border-b border-borderCol">
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Judul Program</th>
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Deadline</th>
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-borderCol">
                        <?php foreach ($programs as $p): ?>
                            <tr class="hover:bg-white/[0.02] transition-colors">

                                <!-- Judul -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-xl bg-purple-500/15 border border-purple-500/25 flex items-center justify-center shrink-0">
                                            <i data-lucide="award" class="w-3.5 h-3.5 text-purple-400"></i>
                                        </div>
                                        <span class="font-semibold text-white line-clamp-1"><?= esc($p['title']); ?></span>
                                    </div>
                                </td>

                                <!-- Deadline -->
                                <td class="px-6 py-4">
                                    <div class="inline-flex items-center gap-1.5 text-rose-400 font-medium">
                                        <i data-lucide="clock" class="w-3.5 h-3.5 shrink-0"></i>
                                        <?= esc($p['deadline']); ?>
                                    </div>
                                </td>

                                <!-- Action -->
                                <td class="px-6 py-4">
                                    <a href="/admin/approve-program/<?= $p['id']; ?>"
                                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-bold text-white
                                               bg-gradient-to-b from-emerald-500/90 to-emerald-600/90
                                               hover:brightness-110 transition-all shadow-sm shadow-emerald-500/20">
                                        <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                        Approve
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php endif; ?>

</div>

<style>
    /* Scoped styles — hanya berlaku untuk konten ini */
    #admin-content .bg-surface { background-color: #0F1523; }
    #admin-content .border-borderCol { border-color: #1E293B; }
</style>