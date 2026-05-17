<!-- users_content.php — diinjeksi via fetch ke #admin-content -->

<div class="space-y-6">

    <!-- Header -->
    <div class="flex items-start justify-between gap-4 flex-wrap">
        <div>
            <div class="mb-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold uppercase tracking-wider">
                    <i data-lucide="user-check" class="w-3 h-3"></i>
                    Manajemen User
                </span>
            </div>
            <h2 class="text-2xl font-extrabold text-white">User Pending Approval</h2>
            <p class="text-slate-400 text-sm mt-1">Daftar user yang menunggu persetujuan admin.</p>
        </div>
    </div>

    <?php if (empty($users)): ?>

        <!-- Empty State -->
        <div class="flex flex-col items-center justify-center py-20 bg-surface border border-borderCol rounded-2xl text-center">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500/20 to-purple-500/20 border border-indigo-500/20 flex items-center justify-center mb-5">
                <i data-lucide="users" class="w-8 h-8 text-indigo-400"></i>
            </div>
            <h3 class="text-lg font-bold text-white mb-2">Tidak ada user pending</h3>
            <p class="text-slate-400 text-sm max-w-xs">Semua user sudah disetujui atau belum ada pendaftar baru.</p>
        </div>

    <?php else: ?>

        <!-- Count badge -->
        <div class="flex items-center gap-2 px-4 py-2.5 bg-indigo-500/10 border border-indigo-500/20 rounded-xl w-fit">
            <i data-lucide="users" class="w-4 h-4 text-indigo-400 shrink-0"></i>
            <p class="text-sm text-indigo-300">
                <strong class="text-white"><?= count($users) ?> user</strong> menunggu persetujuan
            </p>
        </div>

        <!-- Table -->
        <div class="bg-surface border border-borderCol rounded-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-white/[0.03] border-b border-borderCol">
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Username</th>
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Email</th>
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Status</th>
                            <th class="text-left px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-borderCol">
                        <?php foreach ($users as $u): ?>
                            <tr class="hover:bg-white/[0.02] transition-colors">

                                <!-- Username -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-indigo-500/15 border border-indigo-500/25 flex items-center justify-center shrink-0">
                                            <i data-lucide="user" class="w-3.5 h-3.5 text-indigo-400"></i>
                                        </div>
                                        <span class="font-semibold text-white"><?= esc($u['username']); ?></span>
                                    </div>
                                </td>

                                <!-- Email -->
                                <td class="px-6 py-4 text-slate-400">
                                    <?= esc($u['email']); ?>
                                </td>

                                <!-- Status -->
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                                        Pending
                                    </span>
                                </td>

                                <!-- Action -->
                                <td class="px-6 py-4">
                                    <a href="/admin/approve-user/<?= $u['id']; ?>"
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