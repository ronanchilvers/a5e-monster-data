---
statblock: true
name: 'Bolt-Thrower - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Construct
cr: 2
ac: 14
hp: 44
hit_dice: '8d6 + 16'
speed: '15 ft., climb 15 ft.'
stats:
    - 6
    - 16
    - 14
    - 1
    - 6
    - 1
damage_immunities: 'poison, psychic'
condition_immunities: 'blinded, charmed, deafened, exhaustion, frightened, paralyzed, petrified, poisoned'
skillsaves:
    perception: 0
senses: 'blindsight 120 ft. (blind beyond that range), passive Perception 14'
traits:
    - { name: 'Clockwork Sights', desc: 'The bolt-thrower does not have disadvantage on attack rolls when making ranged attacks within 5 feet of a hostile creature.' }
    - { name: Rooted, desc: "The bolt-thrower can use a bonus action to anchor itself to or detach itself from a surface. While anchored, the bolt-thrower's Speed is 0, and a DC 20 Strength check is required to detach it. A bolt-thrower cannot use its heavy crossbow unless it is anchored." }
actions:
    - { name: Multiattack, desc: 'The bolt-thrower attacks once with each of its crossbows.' }
    - { name: 'Light Crossbow', desc: 'Ranged Weapon Attack: +5 to hit, range 80/320 ft., one target. Hit: 7 (1d8 + 3) piercing damage.' }
    - { name: 'Heavy Crossbow', desc: 'Ranged Weapon Attack: +5 to hit, range 100/400 ft., one target. Hit: 8 (1d10 + 3) piercing damage.' }
combat:
    - { name: 'The bolt-thrower fires bolts at the closest unauthorized creature', desc: 'If struck in melee, it fires both bolts on its next turn, detaches as a bonus action, and moves away from its attacker. On its next turn, unless struck in melee again, it anchors itself and fires its bolts.' }

---
```statblock
monster: Bolt-Thrower - A5E
```
