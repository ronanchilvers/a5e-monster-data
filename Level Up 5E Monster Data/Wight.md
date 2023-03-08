---
statblock: true
name: Wight
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 3
ac: 15
hp: 45
hit_dice: '6d8 + 18'
speed: '30 ft.'
stats:
    - 14
    - 14
    - 16
    - 10
    - 12
    - 14
damage_resistances: 'cold, necrotic; damage from nonmagical, non-silvered weapons'
skillsaves:
    - { perception: 3 }
    - { stealth: 4 }
senses: 'darkvision 60 ft., passive Perception 13'
languages: 'the languages it knew in life'
traits:
    - { name: 'Cold Aura', desc: "A creature that starts its turn grappled by the wight, touches it, or hits it with a melee attack while within 5 feet takes 3 (1d6) cold damage. A creature can take this damage only once per turn. If the wight has been subjected to fire damage since its last turn, this trait doesn't function." }
    - { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the wight has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    - { name: 'Undead Nature', desc: "A wight doesn't require air, sustenance, or sleep." }
actions:
    - { name: Longsword, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 6 (1d8 + 2) slashing damage plus 3 (1d6) cold damage.' }
    - { name: Seize, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 3 (1d6) cold damage, and the target is grappled (escape DC 12). Until this grapple ends, the target is restrained and the only attack the wight can make is Life Drain against the grappled target.' }
    - { name: Longbow, desc: 'Ranged Weapon Attack: +4 to hit, range 150/600 ft., one target. Hit: 6 (1d8 + 2) piercing damage plus 3 (1d6) cold damage.' }
'bonus actions':
    - { name: 'Life Drain', desc: "Melee Weapon Attack: +4 to hit, reach 5 ft., one creature. Hit: 6 (1d8 + 2) necrotic damage, and the target makes a DC 13 Constitution saving throw. On a failure, the target's hit point maximum is reduced by an amount equal to the necrotic damage dealt. The reduction lasts until the target finishes a long rest. A humanoid or beast reduced to 0 hit points by this attack dies. Its corpse rises 24 hours later as a zombie under the wight's control." }
combat:
    - { name: 'The wight targets spellcasters with Life Drain and its longsword, and uses Seize and Life Drain against foes wielding weapons', desc: "It prefers combat with a single foe while ordering its zombie minions to attack its opponent's allies. It fights until destroyed." }

---
```statblock
monster: Wight
```
